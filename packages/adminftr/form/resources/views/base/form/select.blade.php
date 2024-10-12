@php
    $required = $isRequired ? 'required' : '';
    $classes = !empty($classes) ? 'form-control ' . $classes : 'form-control';
    $inputName = $isRelationship ? 'relations.' . $name : 'data.' . $name;
@endphp

@if(!$canHide)

    <div wire:ignore x-data="{
            multiple: {{ $multiple ? 'true' : 'false' }},
            whitelist: [],
            timeout: null,
            value: @this.entangle('{{ $inputName }}'),
            init() {
                const inputElement = this.$refs.tagInput;
                const tagify{{$name}} = new Tagify(inputElement, {
                    skipInvalid: true,
                    tagTextProp: '{{$labelField}}',
                    mode: this.multiple ? 'dropdown' : 'select',
                    dropdown: {
                        closeOnSelect: false,
                        enabled: 0,
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
                tagify{{$name}}.on('input', (e) => this.onInput(e, tagify{{$name}}));
                tagify{{$name}}.on('remove', (e) => this.onRemoveTag(e, tagify{{$name}}));
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
                if (Array.isArray(this.value)) {
                    tagify.addTags(this.value.map(item => ({value: item.id, id: item.id, name: item.name})));
                }
                else {
                    const value = this.whitelist.find(item => item.value === this.value);
                    if (value) {
                        tagify.addTags([value]);
                    }
                }
            },
            async onInput(e, tagify) {
                const inputValue = e.detail.value.trim();
                tagify.loading(true)
                tagify.dropdown.hide();
                this.whitelist = await @this.call('searchSelect', inputValue, '{{ $name }}');
                this.whitelist = this.whitelist.map(item => ({value: item.id, id: item.id, name: item.name}));
                tagify.settings.whitelist = this.whitelist;
                tagify.loading(false);
                tagify.dropdown.show(e.detail.value);
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
