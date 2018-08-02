<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item;

class ItemsController extends Controller
{
    public function index($id) {
        $genreId = request()->genreId;
        
        $items = Item::where('genreid', $genreId)->paginate(20);
        
        return view('items.index', [
            'items' => $items,
        ]);
    }
    
    public function show($id) {
        $item = Item::find($id);
        $want_users = $item->want_users;
        $like_users = $item->like_users;
        
        return view('items.show', [
            'item' => $item,
            'want_users' => $want_users,
            'like_users' => $like_users,
        ]);
    }
}
