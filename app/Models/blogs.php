<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class blogs extends Model
{
    use softDeletes;
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['title', 'description', 'user_id'];
    // protected $date = ['deleted_at'];

    /**
     * Get the user associated with the blogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsto('App\Models\users', 'user_id', 'id');

        // ---------------------------------------------------
        // OR
        // ---------------------------------------------------
        return $this->belongsto('App\Models\users', 'id', 'user_id');
    }
}
