<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/images/';
    public function user()
    {
        return $this->belongsTo(User::class); //Each photo belongs to ONE user!
    }

    //Using Accessor for showing user avatar in admin index
    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
