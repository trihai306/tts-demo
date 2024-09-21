@php
    $part = explode('.', $name);
    $nameData = str_replace('.', '_', $name);
@endphp

<div x-data="checkbox{{ $part[0] }}">
    @if(!$canHide)
        <div>
            @if(!is_null($label))
                <label class="mb-2 form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
            @endif
            <template x-for="option in options" :key="option.value">
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" :value="option.value"
                           x-model="selectedOptions">
                    <span class="form-check-label" x-text="option.label"></span>
                    <template x-if="option.description">
                        <span class="form-check-description" x-text="option.description"></span>
                    </template>
                </label>
            </template>
            @error('data.' . $nameData)
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
        </div>
    @endif
</div>

<script>
    document.addEventListener('livewire:init', () => {
        Alpine.data('checkbox{{ $part[0] }}', () => ({
            selectedOptions: @this.entangle('data.{{ $nameData }}') || [],
            options: [],
            init() {
                this.fetchOptions();
                @this.on('form-saved', () => {
                    this.fetchOptions();
                });
            },
            fetchOptions() {
            @this.call('checkBoxOptions', '{{ $name }}').then(response => {
                this.options = response.map(item => ({
                    value: item.id,
                    label: item.name,
                    description: item.description || null
                }));
                this.selectedOptions = @this.get('data.{{ $nameData }}') || [];
                this.selectedOptions = this.selectedOptions.map(option => option.id.toString());
            });
            }
        }));
    });
</script>
