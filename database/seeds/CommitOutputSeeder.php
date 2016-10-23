<?php

use Illuminate\Database\Seeder;

class CommitOutputSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
        DB::table("packages")->truncate();
        DB::table("outputs")->truncate();
        DB::table("commits")->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");

        for($i2=0;$i2<5;$i2++)
        {
            $package = factory(App\Package::class)->create();

            factory(App\Commit::class)->create([
                "package_id" => $package->id
            ]);

            $time=0;

            for ($i=0;$i<24;$i++)
            {
                factory(App\Output::class, 24)->create([
                    "package_id" => $package->id,
                    "time" => sprintf("%02d",$time) . ":" . sprintf("%02d",0)
                ]);
                $time++;
            }
        }
    }
}
