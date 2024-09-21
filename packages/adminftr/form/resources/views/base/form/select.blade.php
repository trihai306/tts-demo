@php
    $required = $isRequired ? 'required' : '';
    $classes = !empty($classes) ? 'form-control ' . $classes : 'form-control';
    $parts = str_replace('.', '_', $name);
@endphp

@if(!$canHide)
    <div wire:ignore>
        @if($label)
            <label class="form-label {{$required}}" for="{{$parts}}">{{$label}}</label>
        @endif
        <div id="dropdown{{$parts}}" x-data="dropdown{{$parts}}" class="dropdown">
            <select id="{{$parts}}"
                    {{$multiple ? 'multiple' : ''}} {{$required}} class="form-select {{ $classes }}"></select>
        </div>
        @error('data.'.$name)
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
        @enderror
        <script>
            document.addEventListener('livewire:init', () => {
                Alpine.data('dropdown{{$parts}}', () => ({
                    init() {
                        if (!document.querySelector("#{{$parts}}").classList.contains("tomselected")) {
                            const tomSelect{{$parts}} = new TomSelect("#{{$parts}}", {
                                valueField: "{{$valueField}}",
                                copyClassesToDropdown: false,
                                dropdownParent: "body",
                                onChange: value => this.onChange(value),
                                options: this.options,
                                searchField: ["{{$labelField}}"],
                                plugins: {!! json_encode($plugins) !!},
                                maxOptions: {{$maxOptions}},
                                create: false,
                                render: {
                                    option: function (data, escape) {
                                        return "<div>" + escape(data.{{$labelField}}) + "</div>";
                                    },
                                    item: function (data, escape) {
                                        return "<div>" + escape(data.{{$labelField}}) + "</div>";
                                    }
                                },
                                load: function (query, callback) {
                                    if (this.liveSearch) {
                                    @this.call('searchSelect', query, "{{$name}}")
                                        .then(response => {
                                            const data = response.map(item => ({
                                                value: item["{{$valueField}}"],
                                                label: item["{{$labelField}}"]
                                            }));
                                            callback(data);
                                        })
                                    } else {
                                        callback();
                                    }
                                }
                            });

                            let dataParts = @this.get("data.{{$parts}}");
                            if (dataParts instanceof Object) {
                                dataParts.forEach(item => {
                                    tomSelect{{$parts}}.addItem(item["{{$valueField}}"]);
                                });
                            } else {
                                tomSelect{{$parts}}.addItem(@this.get("data.{{$name}}"));
                            }
                            document.querySelector("#{{$parts}}").classList.add("tomselected");
                        }
                    },
                    onChange(value) {
                    @this.set("data.{{$parts}}", value, {{$reactive ? "true" : "false"}})
                        ;
                    },
                    searchSelect(query, name) {
                    @this.call("searchSelect", query, name).then(response => {
                        this.options = response.map(item => ({
                            "{{$valueField}}": item["{{$valueField}}"],
                            "{{$labelField}}": item["{{$labelField}}"]
                        }));
                    })
                        ;
                    },
                    options: @json($options),
                    liveSearch: @json($liveSearch),
                }));
            });
        </script>
    </div>
@endif


