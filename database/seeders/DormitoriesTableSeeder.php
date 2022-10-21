<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dormitories')->insert([
            'name' => "女一宿",
            'housemaster' => "Mary",
            'contact' => "0982168523",
        ]);
    }
}
