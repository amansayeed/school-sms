<?php 
use Faker\Generator as Faker;
use App\Models\SchoolClass;
use App\Models\ClassSection;

$factory->define(App\Models\SchoolClass::class,function(Faker $faker){

return[

"name"=>$faker->name,
"class_section_id"=>ClassSection::all()->random()->id,
"seats_available"=>$faker->numberBetween(30,50)




];


});