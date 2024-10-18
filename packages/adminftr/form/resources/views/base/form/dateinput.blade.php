@php
    $required = $isRequired ? 'required' : '';
    $classes = !empty($classes) ? 'form-control '.$classes : 'form-control';
    $placeholder = isset($placeholder) ? 'placeholder='.$placeholder : '';
@endphp

@if(!$canHide)
    <div wire:ignore>
        <div id="{{ $name }}_datepicker" x-data="{
                init() {
                    let input = document.getElementById('{{ $name }}');
                    flatpickr(input, {
                        enableTime: true,
                        dateFormat: '{{ $format }}',
                        time_24hr: true,
                        onChange: (selectedDates, dateStr) => {
                            $wire.set('data.{{ $name }}', dateStr, {{ $reactive ? 'true' : 'false' }});
                        },
                        defaultDate: $wire.get('data.{{ $name }}'),
                        locale: {
                            firstDayOfWeek: 1,
                            weekdays: {
                                shorthand: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                                longhand: [
                                    'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
                                ],
                            },
                            months: {
                                shorthand: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                longhand: [
                                    'January', 'February', 'March', 'April', 'May', 'June', 'July',
                                    'August', 'September', 'October', 'November', 'December',
                                ],
                            },
                        },
                    });
                }
            }">
            @if($label)
                <label class="mb-2 form-label {{$required ? 'required':''}}" for="{{ $name }}">{{ $label }}</label>
            @endif
            <input name="{{ $name }}" id="{{ $name }}"
                   {{ $required }} class="{{ $classes }}" {{ $attributes }} {{ $placeholder }}>

            @error('data.'.$name)
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
@endif
