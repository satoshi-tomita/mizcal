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
        
        Item::create([
            'code' => 'pc-good:10181923',
            'name' => 'SIMフリー 未使用 Samsung Galaxy S9 Plus Dual-SIM SM-G9650 【256GB Midnight Black 香港版 SIMフリー】【当社6ヶ月保証】 スマホ 中古 本体 送料無料【中古】 【 中古スマホとタブレット販売のイオシス 】',
            'url' => 'https://item.rakuten.co.jp/pc-good/138274/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/pc-good/cabinet/iosys_g/138000_139999/138274_1.jpg',
            'genreid' => 560202,
        ]);
        
        Item::create([
            'code' => 'pc-good:10190417',
            'name' => '白ロム au 未使用 【SIMロック解除済】Galaxy S9+ SCV39 Titanium Gray【当社6ヶ月保証】 スマホ 中古 本体 送料無料【中古】 【 中古スマホとタブレット販売のイオシス 】',
            'url' => 'https://item.rakuten.co.jp/pc-good/143476/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/pc-good/cabinet/iosys_g/142000_143999/143476_1.jpg',
            'genreid' => 560202,
        ]);
        
        Item::create([
            'code' => 'uatshopping:10008290',
            'name' => '【新品/即納】Apple iPad 9.7インチ Wi-Fiモデル 128GB 2018年春モデル MR7K2J/AApple Pencil対応 シルバー 【楽天あんしん延長保証　加入可能商品】【KK9N0D18P】送料サイズS',
            'url' => 'https://item.rakuten.co.jp/uatshopping/4549995017397/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/uatshopping/cabinet/06038198/imgrc0081423381.jpg',
            'genreid' => 560029,
        ]);
        
        Item::create([
            'code' => 'uatshopping:10008278',
            'name' => '【新品/即納】Apple iPad 9.7インチ Wi-Fiモデル 32GB 2018年春モデル MR7F2J/AApple Pencil対応 スペースグレイ 【楽天あんしん延長保証　加入可能商品】【KK9N0D18P】送料サイズS',
            'url' => 'https://item.rakuten.co.jp/uatshopping/4549995017359/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/uatshopping/cabinet/06038198/imgrc0081330960.jpg',
            'genreid' => 560029,
        ]);
        
        Item::create([
            'code' => 'biccamera:11685432',
            'name' => '【送料無料】 ASUS　エイスース Androidタブレット［10.1型ワイド・ストレージ 16GB］　ASUS　ZenPad　10　Z301M-DB16　（2017年秋モデル・ダークブルー）[Z301MDB16]',
            'url' => 'https://item.rakuten.co.jp/biccamera/0889349744819/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/biccamera/cabinet/product/2975/00000003793938_a02.jpg',
            'genreid' => 560029,
        ]);
        
        Item::create([
            'code' => 'biccamera:11685433',
            'name' => '【送料無料】 ASUS　エイスース Androidタブレット［10.1型ワイド・ストレージ 16GB］　ASUS　ZenPad　10　Z301M-WH16　（2017年秋モデル・クラシックホワイト）[Z301MWH16]',
            'url' => 'https://item.rakuten.co.jp/biccamera/0889349744826/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/biccamera/cabinet/product/2975/00000003793941_a02.jpg',
            'genreid' => 560029,
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
