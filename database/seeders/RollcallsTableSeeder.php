<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RollcallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rollcalls')->insert([
            'date' => "2022-10-13",
            'sbid' => 1,
            'presence' => 1,
            'leave' => 1,
            'late' => 1,
        ]);
    }
}
