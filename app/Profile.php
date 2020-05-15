<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image:'/profile/E98bmLZA0GrgRYOj73m4VlGoGfX4LlHMiJEgYb4N.png';
        return '/storage/'.$imagePath; 
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
