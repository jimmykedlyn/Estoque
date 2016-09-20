<?php

namespace App\models\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable;
     *
     * @var array
     */

    protected $fillable = [
        'username', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays
     *
     *
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}
