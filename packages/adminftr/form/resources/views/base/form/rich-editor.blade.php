<div id="{{ $name }}_container" x-data="{{ $name }}editor" wire:ignore>
    <label class="form-label {{$required ? 'required':''}}" for="{{$name}}">{{$label}}</label>
    <textarea id="{{$name}}" name="{{$name}}" wire:model="data.{{$name}}" :class="classes" :required="required"
              :attributes="attributes"></textarea>
    @error('data.'.$name)
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<script>
    document.addEventListener('livewire:init', () => {
        Alpine.data('{{ $name }}editor', () => ({
            name: '{{ $name }}',
            classes: '{{ $classes }}',
            required: '{{ $required }}',
            attributes: '{{ $attributes }}',
            init() {
                this.createTimymce();
            },
            createTimymce(){
                if (tinymce.get(this.name)) {
                    tinymce.remove('#' + this.name);
                }
                tinymce.init({
                    selector: '#' + this.name,
                    plugins: '{{ $plugins }}',
                    toolbar_mode: 'floating',
                    branding: false,
                    promotion: false,
                    toolbar: '{{ $toolbar }}',
                    height: '{{ $height }}',
                    menubar: '{{ $menubar }}',
                    statusbar: true,
                    readonly: '{{ $readonly }}',
                    setup: (editor) => {
                        editor.on('keyup', () => {
                        @this.set('data.' + this.name, editor.getContent(), false);
                        });
                    }
                });
            }
        }));
    });
</script>
