@php
    use Adminftr\Core\Http\Models\Menu;

    // Get menus grouped by sidebar_title with parent-child hierarchy
    $excludedPatterns = ['login', 'logout', 'register', 'forgot'];
    $menus = Menu::with(['children' => function ($query) {
        $query->orderBy('order');
    }])
    ->whereNull('parent_id')
    ->orderBy('sidebar_title')
    ->orderBy('order')
    ->get()
    ->groupBy('sidebar_title');
@endphp

<aside class="page-sidebar">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div class="main-sidebar" id="main-sidebar">
        <ul class="sidebar-menu" id="simple-bar">
            @foreach ($menus as $sidebarTitle => $menuGroup)
                <li class="sidebar-main-title">
                    <div>
                        <h5 class="sidebar-title f-w-700">{{ $sidebarTitle }}</h5>
                    </div>
                </li>
                @foreach ($menuGroup as $menu)
                    <li class="sidebar-list">
                        <a class="sidebar-link" href="@if(count($menu->children) > 0)
                        javascript:void(0)
                        @else
                            {{url($menu->url)}}
                        @endif
                        ">
                            @if($menu->icon)
                                {{$menu->icon}}
                            @else
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-databricks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l9 5l9 -5v-3l-9 5l-9 -5v-3l9 5l9 -5v-3l-9 5l-9 -5l9 -5l5.418 3.01" /></svg>
                            @endif
                            <h6>{{ $menu->title }}</h6>
                            @if ($menu->badge)
                                <span class="badge">{{ $menu->badge }}</span>
                            @endif
                            @if (count($menu->children) > 0)
                                <i class="iconly-Arrow-Right-2 icli"></i>
                            @endif
                        </a>
                        @if (count($menu->children) > 0)
                            <ul class="sidebar-submenu">
                                <li><a href="{{ url($menu->url) }}">{{ $menu->title }}</a></li>
                                @foreach ($menu->children as $child)
                                    <li><a href="{{ url($child->url) }}">{{ $child->title }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</aside>
