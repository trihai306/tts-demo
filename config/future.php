<?php

return [
    'future' => [
        'cache' => [
            'enabled' => true,
            'duration' => 60,
        ],
        'route' => [
            'prefix' => 'admin',
            'as' => 'admin.',
            'middleware' => [
                'web',
                'auth',
            ],
        ],
        'messages' => true,
        'notifications' => true,
        'dashboard' => [
            'widgets' => [
                \Adminftr\Widgets\Future\WidgetGroup::make('Today',[
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 45, 'description' => 'New Alerts'],
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 30, 'description' => 'Favorites'],
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 15, 'description' => 'Top Rated'],
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 15, 'description' => 'Top Rated'],
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 15, 'description' => 'Top Rated'],
                    ['icon' => 'ti ti-alert-square-rounded', 'value' => 15, 'description' => 'Top Rated'],
                ]),
            ],

        ],
    ],
];
