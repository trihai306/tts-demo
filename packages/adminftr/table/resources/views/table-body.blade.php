@if($data && count($data) > 0)
    <tbody>
    @foreach($data as $item)
        <tr wire:key="data-{{$item->id}}">
            {{--            <td>--}}
            {{--                <div x-sort:handle>--}}
            {{--                    <i class="fas fa-grip-lines"></i>--}}
            {{--                </div>--}}
            {{--            </td>--}}
            @if($this->canSelect())
                <td>
                    <div>
                        <input type="checkbox" class="form-check-input checkbox" :id="'check-' + {{$item->id}}"
                               :value="{{$item->id}}"
                               :checked="isChecked({{$item->id}})"
                               @click="toggleSelection({{$item->id}})">
                    </div>
                </td>
            @endif
            @foreach($this->defineColumns() as $column)
                @if($column->visible)
                    <td>{!! $column->render($item) !!}</td>
                @endif
            @endforeach
            @if($this->getActions())
                @if($this->getActions()->actions)
                    @if($this->defineActions($item))
                        <td class="text-center">
                            <div>
                                {{ $this->defineActions($item) }}
                            </div>
                        </td>
                    @endif
                @endif
            @endif

        </tr>
    @endforeach
    </tbody>
@else
    <tbody>
    <tr>
        <td colspan="{{ count($this->defineColumns()) + ($this->canSelect() ? 1 : 0) + ($this->getActions() ? 1 : 0) }}"
            class="text-center">
            No data available
        </td>
    </tr>
    </tbody>
@endif
