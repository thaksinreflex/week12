<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
public function run(): void{
     $faker = Faker::create();
    for ($i = 1; $i <= 20; $i++) {
    DB::table('student')->insert([
        'name' => Str::random(10), // Use fixed length instead of $i
        'age' => rand(18, 25),     // Use a realistic age instead of a string
    ]);
  }

    for ($i = 1; $i <= 20; $i++) {
        DB::table('teacher')->insert([
                'name' => $faker->name(),
                 // You can adjust this range as needed
                'subject' => "Subject $i"
        ]);
    }
 }
}

