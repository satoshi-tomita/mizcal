<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item;

class ItemsController extends Controller
{
    public function create()
    {
        $keyword = request()->keyword;
        $items = [];
        if ($keyword) {
            $client = new \RakutenRws_Client();
            $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
            
            $rws_response = $client->execute('IchibaItemSearch', [
                'keyword' => $keyword,
                'imageFlag' => 1,
                'hits' => 20,
            ]);
            
            foreach ($rws_response->getData()['Items'] as $rws_item) {
                $item = new Item();
                $item->code = $rws_item['Item']['itemCode'];
                $item->name = $rws_item['Item']['itemName'];
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $item->genreid = $rws_item['Item']['genreId'];
                $items[] = $item;
            }
        }
        
        return view('items.search', [
            'keyword' => $keyword,
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
