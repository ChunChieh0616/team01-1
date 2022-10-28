<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BedsTableSeeder extends Seeder
{

    public function generateRandomBedcode($length = 7) {
        $bedcode = '-0123456789';
        $bedcodelength = strlen($bedcode);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            if ($i == 5)
                $randomString .= $bedcode[0];
            else
                $randomString .= $bedcode[rand(1, $bedcodelength - 1)];
        }
        return $randomString;
    }

    public function generateRandomDid() {
        $did = [1,2,3,4];
        return $did[rand(0, count($did)-1)];
    }

    public function generateRandomRoomtype() {
        $positions = ['三', '四'];
        return $positions[rand(0, count($positions)-1)] . "人房";
    }

    public function run()
    {
        
        for($i = 0; $i<30; $i++){
            $bedcode = $this->generateRandomBedcode();
            $did = $this->generateRandomDid();
            $roomtype = $this->generateRandomRoomtype();
        
            DB::table('beds')->insert([
                'bedcode' => $bedcode,
                'did' => $did,
                'roomtype' => $roomtype
            ]);
        }

        
    }
}