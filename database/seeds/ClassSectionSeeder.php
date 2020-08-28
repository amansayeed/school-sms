<?php

use Illuminate\Database\Seeder;
use App\Models\ClassSection;

class ClassSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(


            array('section'=>'A','status'=>'1'),
            array('section'=>'B','status'=>'1'),
            array('section'=>'C','status'=>'1'),
            array('section'=>'D','status'=>'1'),
            array('section'=>'E','status'=>'1'),
            array('section'=>'F','status'=>'1')


        );

        ClassSection::insert($data);

    }
}
