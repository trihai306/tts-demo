<div class="container-fluid mb-5">
    <div class="row align-items-end">
        <div class="col-auto ms-auto d-print-none">
            <div class="btn-showcase">
                @foreach( $this->headerActions() as $headerAction)
                    {{ $headerAction->render()}}
                @endforeach
                    @if($this->filters())
                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button"
                           aria-controls="offcanvasEnd">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-filter"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" /></svg>
                        </a>
                    @endif
                    <div x-data="{ isToggled: false }" class="custom-dropdown">
                        <button type="button" class="btn btn-primary h-100 ps-2"
                                @click="isToggled = !isToggled">
                            <svg  x-show="isToggled" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-toggle-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M2 6m0 6a6 6 0 0 1 6 -6h8a6 6 0 0 1 6 6v0a6 6 0 0 1 -6 6h-8a6 6 0 0 1 -6 -6z" /></svg>
                            <svg  x-show = "!isToggled" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-toggle-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M2 6m0 6a6 6 0 0 1 6 -6h8a6 6 0 0 1 6 6v0a6 6 0 0 1 -6 6h-8a6 6 0 0 1 -6 -6z" /></svg>
                        </button>
                        <div class="custom-menu" style="z-index: 3" wire:ignore>
                            <ul class="profile-body p-3">
                                @foreach($this->defineColumns() as $column)
                                    @php
                                        $columnName = str_replace('.', '_', $column->name);
                                    @endphp
                                    <li>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox"
                                                   wire:loading.attr="disabled"
                                                   wire:model.live="columnVisibility.{{ $columnName }}"
                                                {{ $column->visible ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ $columnName }}">
                                                {{ $column->label }}
                                            </label>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
