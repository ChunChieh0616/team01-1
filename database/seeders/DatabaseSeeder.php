<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StudentTableSeeder::class);
        $this->call(BedTableSeeder::class);
        $this->call(DormitoriesTableSeeder::class);
        $this->call(SbrecordTableSeeder::class);
        $this->call(LeaveTableSeeder::class);
        $this->call(LateTableSeeder::class);
        $this->call(RollcallsTableSeeder::class);
    }
}
