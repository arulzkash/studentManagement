<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\ClassSubject;
use App\Models\Grades;
use App\Models\Student;
use App\Models\Subjects;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // User::truncate();
        // Teachers::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Teachers::factory(100)->create();
        Classes::factory(200)->create();
        Student::factory(300)->create();
        Subjects::factory(200)->create();
        ClassSubject::factory(200)->create();
        Grades::factory(200)->create();
        // $this->call([
        //     CountryAndCitySeeder::class,
        // ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
