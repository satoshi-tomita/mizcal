<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('feel')->withTimestamps();
    }
    
    public function want_items()
    {
        return $this->items()->where('feel', 'want');
    }
    
    public function want($itemId)
    {
        $exist = $this->is_wanting($itemId);
        
        if ($exist) {
            return false;
        } else {
            $this->items()->attach($itemId, ['feel' => 'want']);
            return true;
        }
    }
    
    public function dont_want($itemId)
    {
        $exist = $this->is_wanting($itemId);
        
        if ($exist) {
            \DB::delete("DELETE FROM item_user WHERE user_id = ? AND item_id = ? AND feel = 'want'", [$this->id, $itemId]);
        } else {
            return false;
        }
    }
    
    public function is_wanting($itemIdOrCode)
    {
        if (is_numeric($itemIdOrCode)) {
            $item_id_exists = $this->want_items()->where('item_id', $itemIdOrCode)->exists();
            return $item_id_exists;
        } else {
            $item_code_exists = $this->want_items()->where('code', $itemIdOrCode)->exists();
            return $item_code_exists;
        }
    }
    
    public function like_items()
    {
        return $this->items()->where('feel', 'like');
    }
    
    public function like($itemId)
    {
        $exist = $this->is_like($itemId);
        
        if ($exist) {
            return false;
        } else {
            $this->items()->attach($itemId, ['feel' => 'like']);
            return true;
        }
    }
    
    public function dont_like($itemId)
    {
        $exist = $this->is_like($itemId);
        
        if ($exist) {
            \DB::delete("DELETE FROM item_user WHERE user_id = ? AND item_id = ? AND feel = 'like'", [$this->id, $itemId]);
        } else {
            return false;
        }
    }
    
    public function is_like($itemIdOrCode)
    {
        if (is_numeric($itemIdOrCode)) {
            $item_id_exists = $this->like_items()->where('item_id', $itemIdOrCode)->exists();
            return $item_id_exists;
        } else {
            $item_code_exists = $this->like_items()->where('code', $itemIdOrCode)->exists();
            return $item_code_exists;
        }
    }
}
