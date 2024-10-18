@php
    $required = $isRequired ? 'required' : '';
    $classes = !empty($classes) ? 'form-control ' . $classes : 'form-control';
    $inputName = $isRelationship ? 'relations.' . $name : 'data.' . $name;
@endphp

@if(!$canHide)
    <div wire:ignore
         x-data="{
            multiple: {{ $multiple ? 'true' : 'false' }},
            whitelist: [],
            timeout: null,
            inputsearch: '',
            value: $wire.entangle('{{ $inputName }}'),
            init() {
                const inputElement = this.$refs.tagInput;
                const tagify{{$name}} = new Tagify(inputElement, {
                    tagTextProp: '{{$labelField}}',
                    enforceWhitelist: true,
                    mode: this.multiple ? 'dropdown' : 'select',
                    whitelist: this.whitelist,
                    dropdown: {
                        enabled: 0,
                    },
                    validate: (tagData) => {
                        if(this.whitelist.length >0){
                            return this.whitelist.some(item => item.id == tagData.id);
                        }
                        return true;
                    },
                    templates: {
                        dropdownItem: function(tagData) {
                            return `
                                <div ${this.getAttributes(tagData)} class='tagify__dropdown__item'>
                                    <strong>${tagData.{{$labelField}}}</strong>
                                </div>
                            `;
                        }
                    }
                });
                this.onGetWhiteList(tagify{{$name}});

                 this.$watch('whitelist', (newWhitelist) => {
                    tagify{{$name}}.settings.whitelist = newWhitelist;
                    tagify{{$name}}.dropdown.show(this.inputsearch);
                });
                tagify{{$name}}.on('dropdown:select', (e) => this.onSelectSuggestion(e, tagify{{$name}}));
                tagify{{$name}}.on('input', (e) => this.onInput(e, tagify{{$name}}));
                tagify{{$name}}.on('remove', (e) => this.onRemoveTag(e, tagify{{$name}}));

            },
            async onGetWhiteList(tagify) {
              tagify.settings.whitelist = (await $wire.call('searchSelect', '', '{{ $name }}')).map(item => ({ value: item.id, id: item.id, name: item.name }));
                if (Array.isArray(this.value)) {
                    const selectedValues = this.value.map(item => item.id);
                    tagify.addTags(selectedValues);
                } else {
                    const value = this.value;
                    if (value) {
                        tagify.addTags(value);
                    }
                }
            },
            onSelectSuggestion(e, tagify) {
                if (e.detail.event.target.matches('.remove-all-tags')) {
                    tagify.removeAllTags();
                } else if (e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`)) {
                    tagify.dropdown.selectAll();
                }

                if (!this.multiple) {
                    this.value = e.detail.data.value;
                } else {
                    this.value = [...this.value, e.detail.data];
                }
            },
            async onInput(e, tagify) {
                tagify.loading(true)
                tagify.dropdown.hide(true)
                this.inputsearch = e.detail.value;
                this.whitelist = (await $wire.call('searchSelect', this.inputsearch, '{{ $name }}')).map(item => ({ value: item.id, id: item.id, name: item.name }));
                 tagify.loading(false)
            },
            onRemoveTag(e, tagify) {
                if (this.multiple) {
                    this.value = this.value.filter(tag => tag.id !== e.detail.data.id);
                } else {
                    this.value = null;
                }
            }
        }"
    >
        @if($label)
            <label class="form-label {{ $required }}" for="{{ $name }}">{{ $label }}</label>
        @endif
        <input id="{{ $name }}" {{ $required }} class="form-input {{ $classes }}" x-ref="tagInput"/>

        @error('data.' . $name)
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
        @enderror
    </div>
@endif
