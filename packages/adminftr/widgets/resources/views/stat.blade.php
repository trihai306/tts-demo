<div class="col-sm-{{$col['sm']}} col-md-{{$col['md']}} col-xl-{{$col['xl']}} box-col-6">
    <div class="card widget-1">
        <div class="card-body">
            <div class="widget-content">
                <div class="widget-round {{$color}}">
                    <div class="bg-round">
                        <svg class="svg-fill">
                          @if($icon)
                            <i class="{{$icon}}"></i>
                          @else
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-databricks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l9 5l9 -5v-3l-9 5l-9 -5v-3l9 5l9 -5v-3l-9 5l-9 -5l9 -5l5.418 3.01" /></svg>
                            @endif
                        </svg>
                        <svg class="half-circle svg-fill">
                            <use href="{{ asset('admiro/assets/svg/icon-sprite.svg#halfcircle') }}"></use>
                        </svg>
                    </div>
                </div>
                <div>
                    <h4>{{$value ?? ''}}</h4><span class="f-light">{{$description ?? ''}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
