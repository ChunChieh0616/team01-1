<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SbrecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sbrecords')->insert([
            'school_year' => 110,
            'semester' => 2,
            'sid' => 3,
            'bid' => 1
        ]);
    }
}
