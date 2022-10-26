<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lates')->insert([
            'sbid' => 6,
            'start' => "2022-09-07",
            'end' => "2023-01-06",
            'reason' => "校外打工",
            'company' => "麥當勞-龍華店",
            'contact' => "02-82000781",
            'address' => "桃園市龜山區萬壽路一段317號",
            'back_time' => "23:30",
            'file_data' => "",
            'file_check' => 1,
            'check' => 1,
            'chief_check' => 1,
            'housemaster_check' => 1,
            'admin_check' => 1,
        ]);
    }
}
