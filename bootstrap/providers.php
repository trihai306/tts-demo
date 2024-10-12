<?php

use Adminftr\Core\FutureServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    FutureServiceProvider::class,
    Spatie\Permission\PermissionServiceProvider::class,
];
