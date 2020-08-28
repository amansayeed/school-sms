<?php

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
        // $this->call(UserSeeder::class);
        //$this->call(ClassSeeder::class);
       // $this->call(facultyTypeSeeder::class);
        //$this->call(GenderSeeder::class);
        //$this->call(facultySeeder::class);
        $this->call(StudentSeeder::class);
    }
}
