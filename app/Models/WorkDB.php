<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkDB extends Model
{
    public $table = 'users';
    public $fillable = ['name','email', 'password'];
}
