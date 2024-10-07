<header class="page-header row">
    <div class="logo-wrapper d-flex align-items-center col-auto">
        <a href="index.html">
            <img class="light-logo img-fluid" width="50" src="{{ asset('logo.png') }}" alt="logo"/>
            <img class="dark-logo img-fluid" src="{{ asset('logo.png') }}" alt="logo"/>
        </a>
        <a class="close-btn toggle-sidebar" href="javascript:void(0)">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-align-justified"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l12 0" /></svg>
        </a>
    </div>
    <div class="page-main-header col">
        <div class="header-left">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Admiro .." name="q" title="" autofocus="autofocus"/>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="form-group-header d-lg-block d-none">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative d-flex align-items-center">
                        <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search..." name="q" title=""/>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-right">
            <ul class="header-right">
                <li class="custom-dropdown">
                    <div class="translate_wrapper">
                        <div class="current_lang">
                            <a class="lang" href="javascript:void(0)">
                                <i class="flag-icon flag-icon-{{ app()->getLocale() == 'en' ? 'us' : (app()->getLocale() == 'fr' ? 'fr' : 'es') }}"></i>
                                <h6 class="lang-txt f-w-700">{{ strtoupper(app()->getLocale()) }}</h6>
                            </a>
                        </div>
                        <ul class="custom-menu profile-menu language-menu py-0 more_lang">
                            <li class="d-block">
                                <a class="lang" href="{{ route('change.language', ['lang' => 'en']) }}">
                                    <i class="flag-icon flag-icon-us"></i>
                                    <div class="lang-txt">English</div>
                                </a>
                            </li>
                            <li class="d-block">
                                <a class="lang" href="{{ route('change.language', ['lang' => 'fr']) }}">
                                    <i class="flag-icon flag-icon-fr"></i>
                                    <div class="lang-txt">Français</div>
                                </a>
                            </li>
                            <li class="d-block">
                                <a class="lang" href="{{ route('change.language', ['lang' => 'es']) }}">
                                    <i class="flag-icon flag-icon-es"></i>
                                    <div class="lang-txt">Español</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="search d-lg-none d-flex"> <a href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#Search') }}"></use>
                        </svg></a></li>
                <li>
                    <a class="dark-mode" href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#moondark') }}"></use>
                        </svg></a>
                </li>

                @if (config('future.future.notifications'))
                    <livewire:future::admin.notifications.list></livewire:future::admin.notifications.list>
                @endif
                <li><a class="full-screen" href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#scanfull') }}"></use>
                        </svg></a></li>
                <li class="custom-dropdown"><a href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#bookmark') }}"></use>
                        </svg></a>
                    <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                        <h3 class="title bg-primary-light dropdown-title">Bookmark</h3>
                        <ul>
                            <li>
                                <form class="mb-0">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search Bookmark..."/><span class="input-group-text">
                            <svg class="svg-color">
                              <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#Search') }}"></use>
                            </svg></span>
                                    </div>
                                </form>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-primary"><a href="index.html">
                                        <svg class="svg-color">
                                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#cube') }}"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="index.html">Dashboard</a>
                                    <svg class="svg-color icon-star">
                                        <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#star') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-secondary"><a href="to-do.html">
                                        <svg class="svg-color">
                                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#check') }}"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="to-do.html">To-do</a>
                                    <svg class="svg-color icon-star">
                                        <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#star') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 btn-activity-danger"><a href="apex_chart.html">
                                        <svg class="svg-color">
                                            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#pie') }}"></use>
                                        </svg></a></div>
                                <div class="d-flex justify-content-between align-items-center w-100"><a href="apex_chart.html">Chart</a>
                                    <svg class="svg-color icon-star">
                                        <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#star') }}"></use>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="profile-nav custom-dropdown">
                    <div class="user-wrap">
                        <div class="user-img"><img src="{{ auth()->user()->avatar ? asset('storage/'.auth()->user()->avatar) : asset('admiro/assets/images/profile.png') }}" alt="user"/></div>
                        <div class="user-content">
                            <h6>{{ Auth::user()->name }}</h6>
                            <p class="mb-0">{{ Auth::user()->roles->first()->name ?? 'Chưa có quyền' }}<i class="fa-solid fa-chevron-down"></i></p>
                        </div>
                    </div>
                    <div class="custom-menu overflow-hidden">
                        <ul class="profile-body">
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#Profile') }}"></use>
                                </svg><a class="ms-2" href="{{ route('admin.profile') }}">Account</a>
                            </li>
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#Login') }}"></use>
                                </svg><a class="ms-2" href="{{ route('logout') }}"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</header>
