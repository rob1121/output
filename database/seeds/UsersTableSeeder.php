<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->truncate();

        factory(App\User::class)->create([
            'name' => "Robinson L. Legaspi",
            'employee_id' => 801,
            'user_type' => "admin",
            'station' => "QA",
            'password' => bcrypt("admin"),
            'email' => 'robinsonlegaspi@astigp.com',
        ]);

        factory(App\User::class, 10)->create();
    }
}
