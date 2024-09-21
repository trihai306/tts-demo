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
    use HasRoles;

    protected $fillable = [
        'name', 'email', 'phone', 'avatar', 'address', 'birthday', 'gender', 'password',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['last_login_at', 'updated_at', 'created_at', 'birthday'];

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messageReactions()
    {
        return $this->hasMany(MessageReaction::class);
    }

    public function userConversations()
    {
        return $this->hasMany(UserConversation::class);
    }

    public function hasConversation($conversation_id)
    {
        return $this->conversations()->where('id', $conversation_id)->exists();
    }

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class, 'user_conversations');
    }
}
