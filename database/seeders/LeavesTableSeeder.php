<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('leaves')->insert([
            'sbid' => 6,
            'start' => "2022-09-07",
            'end' => "2022-09-14",
            'reason' => "喪假",
            'check' => 1,
            'housemaster_check' => 1
        ]);
        
    }
}
