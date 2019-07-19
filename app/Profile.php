<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url' , 'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/default.jpg' ;

        return '/storage/' . $imagePath ;
    }

    public function followers()
    {
        
        return $this->belongsTo(User::class);
    }
}
