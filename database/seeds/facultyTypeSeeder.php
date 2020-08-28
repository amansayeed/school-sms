<?php

use Illuminate\Database\Seeder;
Use App\Models\FacultyType;

class facultyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(

            array('type'=>'teaching'),
            array('type'=>'nonteaching'),
            array('type'=>'lab technician'),
            array('type'=>'soprts'),
            array('type'=>'others')

        );

        FacultyType::insert($data);
    }
}
