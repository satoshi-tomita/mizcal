<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Item;

class GenresController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('genreid', $request->id)->orderBy('updated_at', 'desc')->paginate(20);
        return view('genres.index', [
            'items' => $items,
        ]);
    }
}
