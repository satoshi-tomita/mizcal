<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function want()
    {
        $items = \DB::table('item_user')->join('items', 'item_user.item_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count_want'))->where('feel', 'want')->groupBy('items.id', 'items.code', 'items.name', 'items.url', 'items.image_url', 'items.created_at', 'items.updated_at', 'genreid')->orderBy('count_want', 'DESC')->take(10)->get();
        
        return view('ranking.want', [
            'items' => $items,
        ]);
    }
    
    public function like()
    {
        $items = \DB::table('item_user')->join('items', 'item_user.item_id', '=', 'items.id')->select('items.*', \DB::raw('COUNT(*) as count_like'))->where('feel', 'like')->groupBy('items.id', 'items.code', 'items.name', 'items.url', 'items.image_url', 'items.created_at', 'items.updated_at', 'genreid')->orderBy('count_like', 'DESC')->take(10)->get();
        
        return view('ranking.like', [
            'items' => $items,
        ]);
    }
}
