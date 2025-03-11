<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id', 'role_id', 'email', 'password', 'first_name', 'last_name', 'address_id'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'id' => 'string',
        'role_id' => 'string',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
