<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // $this->call(SchoolClassSeeder::class);
    factory(App\Models\SchoolClass::class,15)->create();
    }
}
