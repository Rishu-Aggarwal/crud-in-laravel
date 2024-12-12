<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            "id"=>1,
            "name"=>"Rishu aggarwal",
            "email"=>"rishu@gmail.com",
            "password"=>"12345678",
            "conform-password"=>"12345678",
            "age"=>19,
            "mobile"=>"9548411522"
        ]);
        Student::create([
            "id"=>2,
            "name"=>"Rahul Praksh",
            "email"=>"rahul@gmail.com",
            "password"=>"12345678",
            "conform-password"=>"12345678",
            "age"=>18,
            "mobile"=>"9557592672"
        ]);
        Student::create([
            "id"=>3,
            "name"=>"Rishu aggarwal",
            "email"=>"rishu@gmail.com",
            "password"=>"12345678",
            "conform-password"=>"12345678",
            "age"=>19,
            "mobile"=>"9548411522"
        ]);
        Student::create([
            "id"=>4,
            "name"=>"Rahul Praksh",
            "email"=>"rahul@gmail.com",
            "password"=>"12345678",
            "conform-password"=>"12345678",
            "age"=>18,
            "mobile"=>"9557592672"
        ]);
    }
}
