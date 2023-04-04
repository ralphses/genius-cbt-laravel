<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use App\Models\utility\Utility;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "Dr. Agushaka",
            "email" => "agushaka@fulafia.cbt.edu",
            "password" => Hash::make("password"),
            "email_verified_at" => date("Y-m-d h:m:s")
        ]);

        Faculty::create([
            "name" => "Computing"
        ]);

        Department::create([
            "faculty_id" => 1,
            "name" => "Computer Science"
        ]);

        Course::create([
            "title" => "Introduction to Computer Science",
            "code" => "CSC111",
            "unit" => 3,
            "department_id" => 1,
            "semester" => Utility::SEMESTER["1"],
            "level" => "100 Level"
        ]);

        Course::create([
            "title" => "General Mathematics I",
            "code" => "MTH111",
            "unit" => 3,
            "department_id" => 1,
            "semester" => Utility::SEMESTER["1"],
            "level" => "100 Level"
        ]);

        Course::create([
            "title" => "Use of English I",
            "code" => "GSTIII",
            "unit" => 2,
            "department_id" => 1,
            "semester" => Utility::SEMESTER["1"],
            "level" => "100 Level"
        ]);

        Student::create([
            "department_id" => 1,
            "password" => Crypt::encrypt("password"),
            "email" => "abdulkadir@fulafia.cbt.edu",
            "image_path" => "",
            "name" => "Abdulkadir Annawas",
            "status" => true,
            "level" => Utility::LEVELS["1"],
            "matric" => "201700012"
        ]);

        Student::create([
            "department_id" => 1,
            "password" => Crypt::encrypt("password"),
            "email" => "bilyamin@fulafia.cbt.edu",
            "image_path" => "",
            "name" => "Bilyamin El-Kaigama",
            "status" => true,
            "level" => Utility::LEVELS["1"],
            "matric" => "201700013"
        ]);

        Student::create([
            "department_id" => 1,
            "password" => Crypt::encrypt("password"),
            "email" => "habiba@fulafia.cbt.edu",
            "image_path" => "",
            "name" => "Habiba Abdulkadir",
            "status" => true,
            "level" => Utility::LEVELS["1"],
            "matric" => "201700014"
        ]);

        $courses = Course::all();

        $students = Student::all();

        foreach($students as $student) {
            $student->courses()->attach($courses);
        }

    }
}
