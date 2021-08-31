<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public $table = 'task';
    public $fillable = ['task', 'by'];


    
    public function add_by()
    {
        return $this->belongsTo('App\Models\WorkDB', 'by', 'id');

    }
}
