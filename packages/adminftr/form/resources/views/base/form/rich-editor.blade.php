<div id="{{ $name }}_container" x-data="{{ $name }}editor" >
    <label class="form-label {{$required ? 'required':''}}" for="{{$name}}">{{$label}}</label>
    <textarea id="{{$name}}" name="{{$name}}" :class="classes" :required="required" wire:model="data.{{$name}}"></textarea>
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
                console.log(document.getElementById(this.name))
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
