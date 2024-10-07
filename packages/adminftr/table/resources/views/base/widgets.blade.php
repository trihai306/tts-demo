    @if ($this->widgets())
        <div class="container-fluid pt-4">
            <div class="row row-cards">
                @foreach ($this->widgets() as $widget)
                    {!! $widget->render() !!}
                @endforeach
            </div>
        </div>
    @endif
