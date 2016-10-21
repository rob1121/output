<?php
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'employee_id' =>  $faker->word ,
        'station' =>  $faker->word ,
        'user_type' =>  $faker->word ,
        'email' =>  $faker->safeEmail ,
        'password' =>  bcrypt($faker->password) ,
        'remember_token' =>  str_random(10) ,
    ];
});

