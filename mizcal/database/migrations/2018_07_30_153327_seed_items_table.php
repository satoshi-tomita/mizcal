<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Item;

class SeedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Item::create([
            'code' => 'mobilestation:10032106',
            'name' => 'iPhone8 64GB ゴールド docomo Apple MQ7A2J/A 新品 安心保証 ネットワーク永久保証 iPhone 本体',
            'url' => 'https://item.rakuten.co.jp/mobilestation/1-240001008251/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/mobilestation/cabinet/_015/1240001008251_3.jpg',
            'genreid' => 560202,
        ]);
        
        Item::create([
            'code' => 'mobilestation:10033221',
            'name' => 'iPhoneX 256GB シルバー docomo Apple MQC22J/A 新品 安心保証 ネットワーク永久保証 iPhone 本体',
            'url' => 'https://item.rakuten.co.jp/mobilestation/1-240001009540/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/mobilestation/cabinet/_018/1240001009540_3.jpg',
            'genreid' => 560202,
        ]);
        
        Item::create([
            'code' => 'mobilestation:10033656',
            'name' => 'iPhone8 64GB スペースグレイ docomo Apple MQ782J/A 新品 安心保証 ネットワーク永久保証 iPhone 本体',
            'url' => 'https://item.rakuten.co.jp/mobilestation/1-240001009959/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/mobilestation/cabinet/_019/1240001009959_3.jpg',
            'genreid' => 560202,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Item::getQuery()->delete();
    }
}
