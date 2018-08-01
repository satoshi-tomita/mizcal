<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'code' => 'mobilestation:10032106)',
            'name' => 'iPhone8 64GB ゴールド docomo Apple MQ7A2J/A 新品 安心保証 ネットワーク永久保証 iPhone 本体',
            'url' => 'https://item.rakuten.co.jp/mobilestation/1-240001008251/',
            'image_url' => 'https://thumbnail.image.rakuten.co.jp/@0_mall/mobilestation/cabinet/_015/1240001008251_2.jpg?_ex=64x64',
            'genreid' => 560202,
        ]);
    }
}
