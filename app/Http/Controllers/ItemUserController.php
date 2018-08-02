<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class ItemUserController extends Controller
{
    public function want()
    {
        $itemCode = request()->itemCode;
        
        $itemId = Item::where('code', $itemCode)->first()->id;
        
        \Auth::user()->want($itemId);
        
        return redirect()->back();
    }
    
    public function dont_want()
    {
        $itemCode = request()->itemCode;
        
        if(\Auth::user()->is_wanting($itemCode)) {
            $itemId = Item::where('code', $itemCode)->first()->id;
            \Auth::user()->dont_want($itemId);
        }
        return redirect()->back();
    }
    
    public function like()
    {
        $itemCode = request()->itemCode;
        
        $itemId = Item::where('code', $itemCode)->first()->id;
        
        \Auth::user()->like($itemId);
        
        return redirect()->back();
    }
    
    public function dont_like()
    {
        $itemCode = request()->itemCode;
        
        if(\Auth::user()->is_like($itemCode)) {
            $itemId = Item::where('code', $itemCode)->first()->id;
            \Auth::user()->dont_like($itemId);
        }
        return redirect()->back();
    }
}
