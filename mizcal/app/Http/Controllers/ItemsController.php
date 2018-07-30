<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function create()
    {
        $keyword = request()->keyword;
        $items = [];
        if ($keyword) {
            $client = new \RakutenRws_Client();
            $client>setApplicatonId(env('RAKUTEN_APPLICATION_ID'));
            
            $rws_response = $client->execute('IchibaItemSearch', [
                'keyword' => $keyword,
                'imageFlag' => 1,
                'hits' => 20,
            ]);
            
            foreach ($rws_renonse->getData()['Items'] as $rws_item) {
                $item = new Item();
                $item->code = $rws_item['Item']['itemCode'];
                $item->name = $rws_item['Item']['itemName'];
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
            }
        }
        
        return view('items.create', [
            'keyword' => $keyword,
            'items' > $items,
        ]);
    }
}
