<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Schema::disableForeignKeyConstraints();
        $this->call(UserSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(PerformanceSeeder::class);
        $this->call(PerformanceTimeSeeder::class);
       // $this->call(ExtraSeeder::class);
       // Schema::enableForeignKeyConstraints();
    }
}
