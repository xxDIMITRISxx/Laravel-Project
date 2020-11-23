<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * userName as mass assignment   
     */
    protected $fillable = ['userName'];

    /**
     * one-to-many relation with post
     * one profile, many posts
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}


