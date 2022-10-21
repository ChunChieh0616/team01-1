<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('beds')->insert([
            'bedcode' => "82204-1",
            'did' => 2,
            'roomtype' => "三人房",
        ]);
        DB::table('beds')->insert([
            'bedcode' => "82204-2",
            'did' => 2,
            'roomtype' => "三人房",
        ]);
    }
}
