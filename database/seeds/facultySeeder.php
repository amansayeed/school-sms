<?php

use Illuminate\Database\Seeder;

class facultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Faculty::class,25)->create();
    }
}
