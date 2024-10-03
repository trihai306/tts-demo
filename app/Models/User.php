<?php

namespace App\Models;

use Adminftr\Messages\Http\Models\Traits\HasMessages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;
    use HasMessages;

    protected $fillable = [
        'name', 'email', 'phone', 'avatar', 'address', 'birthday', 'gender', 'password',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['last_login_at', 'updated_at', 'created_at', 'birthday'];


}
