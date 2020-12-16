<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * description as mass assignment   
     */
    protected $fillable = ['description'];

    /**
     * one-to-many relation with comments
     * one post, many comments
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    /**
     * many-to-one relation with profiles
     * many posts, one profile
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
