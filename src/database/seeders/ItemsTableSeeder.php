<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test',
            'content' => '商品説明',
            'price' => 1000,
            'image' => 'https://placehold.jp/150x150.png',
        ];
        DB::table('items')->insert($param);
    }
}
