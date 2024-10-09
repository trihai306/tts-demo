@php
    $required = $isRequired ? 'required' : '';
    $classes = !empty($classes) ? 'form-control ' . $classes : 'form-control';
    $inputName = $isRelationship ? 'relations.' . $name : 'data.' . $name;
@endphp

@if(!$canHide)
    <div wire:ignore x-data="tagify{{ $name }}()">
        @if($label)
            <label class="form-label {{ $required }}" for="{{ $name }}">{{ $label }}</label>
        @endif
        <input id="{{ $name }}" {{ $required }} class="form-input {{ $classes }}" x-ref="tagInput"/>
        @error('data.' . $name)
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
        @enderror

        <script>
            document.addEventListener('livewire:init', () => {
                Alpine.data('tagify{{ $name }}', () => ({
                    multiple: {{ $multiple ? 'true' : 'false' }},
                    whitelist: [],
                    value: @this.entangle('{{ $inputName }}'),
                    init() {
                        const inputElement = this.$refs.tagInput;
                        const tagify{{$name}} = new Tagify(inputElement, {
                            enforceWhitelist: true,
                            tagTextProp: "{{$labelField}}",
                            mode: this.multiple ? 'dropdown' : 'select',
                            dropdown: {
                                enabled: 0,
                                maxItems: {{$maxOptions}},
                                classname: '',
                                position: 'all',
                                highlightFirst: true,
                            },
                            templates: {
                                dropdownItem: function(tagData) {
                                    return `
                                    <div ${this.getAttributes(
                                        tagData
                                    )} class='tagify__dropdown__item'>
                                        <strong>${tagData.{{$labelField}}}</strong>
                                    </div>
                            `;
                                }
                            }
                        });

                        this.onGetWhiteList(tagify{{$name}});
                        tagify{{$name}}.on('dropdown:select', (e) => this.onSelectSuggestion(e, tagify{{$name}}));
                    },
                    onSelectSuggestion(e, tagify) {
                        if (e.detail.event.target.matches('.remove-all-tags')) {
                            tagify.removeAllTags();
                        } else if (e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`)) {
                            tagify.dropdown.selectAll();
                        }
                        if (!this.multiple) {
                           this.value = e.detail.data.value;
                        }
                        else {
                            this.value = [...this.value, e.detail.data];
                        }
                    },
                    async onGetWhiteList(tagify){
                        this.whitelist = await @this.call('searchSelect','', '{{ $name }}');
                        this.whitelist = this.whitelist.map(item => ({value: item.id, id: item.id, name: item.name}));
                        tagify.settings.whitelist = this.whitelist;
                        tagify.dropdown.hide();
                        if (Array.isArray(this.value)) {
                           tagify.addTags(this.value.map(item => ({value: item.id, id: item.id, name: item.name})));
                        }
                        else {
                            const value = this.whitelist.find(item => item.value === this.value);
                            if (value) {
                                tagify.addTags([value]);
                            }
                        }
                    }
                }));
            });
        </script>
    </div>
@endif
