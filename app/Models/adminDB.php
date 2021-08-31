<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;

class adminDB extends Authenticatable
{
//     use HasFactory;

    protected $table = 'admin';
    protected $fillable = ['name', 'email', 'password'];

}
