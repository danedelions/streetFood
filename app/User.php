<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'role',
        'address',
        'gender',
        'birth_date',
        'contact_number',
        'email',
        'username',
        'password',
        'quota'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'password',
        'remember_token',
    ];
}
