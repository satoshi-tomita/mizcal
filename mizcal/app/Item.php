<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['code', 'name', 'url', 'image_url', 'genreid'];
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('feel')->withTimestamps();
    }
    
    public function want_users()
    {
        return $this->users()->where('feel', 'want');
    }
    
    public function like_users()
    {
        return $this->users()->where('feel', 'like');
    }
}
