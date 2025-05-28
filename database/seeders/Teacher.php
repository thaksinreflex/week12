<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Teacher extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('teacher')->insert([
                'name' => $faker->name(),
                'age' => rand(25, 60), // You can adjust this range as needed
                'subject' => "Subject $i"
            ]);
        }
    }
}

