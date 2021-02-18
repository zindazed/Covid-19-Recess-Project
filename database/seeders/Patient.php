<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Patient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $category = array("Symptomatic", "Asymptomatic");
        $gendar = array("M", "F");
        $case_type = array("postive", "false positive");
        foreach (range(1,100) as $index){
            DB::table('patients')->insert([
                'patient_name' => $faker ->firstName,
                'date_of_identification' => $faker -> dateTimeBetween(Carbon::now()->subYear(),Carbon::now()->addYear()),
                'category' => $faker -> randomElement($category),
                'gender' => $faker ->  randomElement($gendar),
                'case_type' => $faker -> randomElement($case_type),
                'district' => $faker->state,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),//$faker -> date('Y-m-d H:i:s')
            ]);
        }
    }
}
