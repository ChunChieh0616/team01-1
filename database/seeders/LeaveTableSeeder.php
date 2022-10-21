<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaveTableSeeder extends Seeder
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
            'sbid' => 6,
            'start' => "111/09/07",
            'end' => "111/09/14",
            'reason' => "喪假",
            'check' => "",
            'housemaster_check' => ""
        ]);
        DB::table('sbrecords')->insert([
            'sbid' => 1,
            'start' => "111/10/11",
            'end' => "111/10/12",
            'reason' => "家中有事",
            'check' => "",
            'housemaster_check' => ""
        ]);
    }
}
