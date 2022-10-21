<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'number' => "D1094162012",
            'class' => "資網三B",
            'name' => "簡至昊",
            'address' => "桃園市龜山區萬壽路一段300號",
            'phone' => "02-82093211",
            'nationality' => "台灣",
            'guardian' => "王零零",
            'salutation' => "母",
            'remark' => ""
        ]);
        DB::table('students')->insert([
            'number' => "D1094182042",
            'class' => "資網三B",
            'name' => "羅銘麒",
            'address' => "桃園市龜山區萬壽路一段300號",
            'phone' => "02-82093211",
            'nationality' => "台灣",
            'guardian' => "王零一",
            'salutation' => "父",
            'remark' => ""
        ]);
    }
}
