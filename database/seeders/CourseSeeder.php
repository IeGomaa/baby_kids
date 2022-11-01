<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Html',
                'description' => 'html html html',
                'image' => 'html.png',
                'price' => 100,
                'teacher_id' => 1
            ],
            [
                'name' => 'Php',
                'description' => 'php php php',
                'image' => 'php.png',
                'price' => 1000,
                'teacher_id' => 1
            ]
        ];

        foreach ($courses as $course) {
            course::create([
                'name' => $course['name'],
                'description' => $course['description'],
                'image' => $course['image'],
                'price' => $course['price'],
                'teacher_id' => $course['teacher_id']
            ]);
        }

    }
}
