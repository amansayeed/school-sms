<?php


use App\Models\Students;
use App\models\Gender;

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        

        "reg_no"=>$faker->numberBetween(10000000,500000000),
        "gender_id"=>Gender::all()->random()->id,
        "name"=>$faker->name,
        "email"=>$faker->unique->safeEmail,
        "roll_no"=>$faker->numberBetween(1,100),
        "phone_no"=>$faker->phoneNumber,
        "address"=>$faker->address,
        "father_name"=>$faker->name('male'),
        "mother_name"=>$faker->name('female'),
        "age"=>$faker->numberBetween(5,25)
              
];

});
