<?php

use App\PerformanceTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PerformanceTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        PerformanceTime::truncate();
        PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-12 19:00'));
        PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-15 17:00'));
        PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-05 12:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-24 21:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-18 13:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-18 21:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-29 09:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-06-02 20:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-29 18:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-06-12 09:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-03-24 08:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-05-18 00:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-05-31 23:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-06-09 12:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-20 21:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-12 03:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-05-27 08:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-11 12:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-05-18 23:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-06-12 23:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-01-29 05:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-19 18:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-08 01:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-05-04 09:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-06-16 05:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-04 01:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-04 17:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-14 09:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-21 16:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-04-23 13:00'));
PerformanceTime::create(array('performance_id' => rand(1,6),'start_of_performance' => '2021-02-15 14:00'));


        }


    }

