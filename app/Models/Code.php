<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    /**
     * description as mass assignment   
     */
    protected $fillable = ['code'];

    /**
     * Get the user that owns the code.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User'); //requires use App\Models\User
    }

}
