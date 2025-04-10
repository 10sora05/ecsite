<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '1',
            'name' => '次郎',
            'email' => 'test@co.jp',
            'password' => bcrypt('password'),
        ];
        DB::table('Users')->insert($param);
    }
}
