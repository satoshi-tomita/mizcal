<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Item;

class GenresController extends Controller
{
    public function smartphones()
    {
        $items = Item::where('genreid', 560202)->orderBy('updated_at', 'desc')->paginate(20);
        return view('genres.smartphones', [
            'items' => $items,
        ]);
    }
    
    public function tablets()
    {
        $items = Item::where('genreid', 560029)->orderBy('updated_at', 'desc')->paginate(20);
        return view('genres.tablets', [
            'items' => $items,
        ]);
    }
}
