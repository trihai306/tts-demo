<div class="
    col-sm-{{ $col['sm'] }}
    col-md-{{ $col['md'] }}
    col-xl-{{ $col['xl'] }}
    box-col-6
    proorder-xxl-7
">
    <div class="card job-card">
        <div class="card-header pb-0 card-no-border">
            <div class="header-top">
                <h3>
                    {{ $title }}
                </h3>
            </div>
        </div>
        <div class="card-body pt-2">
            <ul class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                @foreach($widgets as $widget)
                    <li style="max-width: 100%;">
                        <div class="d-flex gap-2 flex-wrap">
                            <div class="flex-shrink-0 {{ $widget['background_class'] ?? 'bg-light-primary' }}">
                                <i style="font-size: 30px"
                                   class="{{ $widget['icon'] }} stroke-icon"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3>{{ $widget['value'] }}</h3>
                                <p>{{ $widget['description'] }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
