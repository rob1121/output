<?php
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name ,
        'employee_id' =>  $faker->randomNumber() ,
        'station' =>  $faker->randomElement(["rto","nrto","mems","tray"]) ,
        'is_admin' =>  $faker->randomElement([1,0]) ,
        'can_output' =>  $faker->randomElement([1,0]) ,
        'can_commit' =>  $faker->randomElement([1,0]) ,
        'email' =>  $faker->safeEmail ,
        'password' =>  bcrypt($faker->password) ,
        'remember_token' =>  str_random(10) ,
    ];
});

$factory->define(App\Commit::class, function (Faker\Generator $faker) {
    $lot = $faker->numberBetween(30, 200);
    return [
        'lot_quantity' =>  $lot ,
        'unit_quantity' =>  $faker->numberBetween(1000000, 5000000)  * $lot ,
        'package_id' =>  function () {
             return factory(App\Package::class)->create()->id;
        } ,
    ];
});

$factory->define(App\Output::class, function (Faker\Generator $faker) {
    $lot = $faker->numberBetween(1, 200);

    return [
        'lot_quantity' =>  $lot ,
        'unit_quantity' =>  $faker->numberBetween(1, 50000)  * $lot ,
        'package_id' =>  function () {
             return factory(App\Package::class)->create()->id;
        } ,
        'remarks' =>  $faker->word ,
    ];
});

$factory->define(App\Package::class, function (Faker\Generator $faker) {
    return [
        'package' =>  $faker->word ,
        'line' =>  $faker->randomElement(["rto","nrto","mems","tray"]) ,

    ];
});

