<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use \Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class userDB extends Authenticatable implements MustVerifyEmail
{
    use notifiable;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
}
