<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){
      $imagePath = ($this->image) ? $this->image: 'profile/pAN5hXyHbs0V3aW9qqmZRrSEpOl4SyJt4773M7B5.png';
      return '/storage/' . $imagePath;
    }

    public function followers(){
      return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
     
    }
  
}
