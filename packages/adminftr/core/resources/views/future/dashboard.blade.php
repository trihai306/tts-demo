<div class="container-fuild default-dashboard general-widget">
    <div class="row">
        <div class="col-xl-4 proorder-xxl-1 col-sm-6 box-col-6">
            <div class="card welcome-banner">
                <div class="card-header p-0 card-no-border">
                    <div class="welcome-card">
                        <img class="w-100 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/welcome-bg.png') }}" alt="">
                        <img class="position-absolute img-1 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/img-1.png') }}" alt="">
                        <img class="position-absolute img-2 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/img-2.png') }}" alt="">
                        <img class="position-absolute img-3 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/img-3.png') }}" alt="">
                        <img class="position-absolute img-4 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/img-4.png') }}" alt="">
                        <img class="position-absolute img-5 img-fluid" src="{{ asset('admiro/assets/images/dashboard-1/img-5.png') }}" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center">
                        <h1>Hello, {{ Auth::user()->name }} <img src="{{ asset('admiro/assets/images/dashboard-1/hand.png') }}" alt=""></h1>
                    </div>
                    <p> Welcome back! Let’s start from where you left.</p>
                    <div class="d-flex align-center justify-content-between"
                         x-data="{ time: '' }"
                         x-init="setInterval(() => {
                             const now = new Date();
                             let hours = now.getHours();
                             let minutes = now.getMinutes();
                             const ampm = hours >= 12 ? 'PM' : 'AM';
                             hours = hours % 12;
                             hours = hours ? hours : 12;
                             minutes = minutes < 10 ? '0' + minutes : minutes;
                             time = `${hours}:${minutes} ${ampm}`;
                         }, 1000);"
                    >
                       <span>
                        <svg class="stroke-icon ">
                          <use href="{{ asset('admiro/assets/svg/icon-sprite.svg#watch') }}"></use>
                        </svg> <i x-text="time"></i></span>
                    </div>
                </div>
            </div>
        </div>
        @if ($widgets)
            <div class="row row-cards mt-5">
                @foreach ($widgets as $widget)
                    {{$widget->render()}}
                @endforeach
            </div>
        @endif
    </div>
</div>
