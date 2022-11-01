<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\teacher;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
//        $courses = course::with('teacher')->get();
//        dd($courses);

        $teacher = teacher::with('course:name,teacher_id')->select(['id','name'])->get();
        dd($teacher);

    }
}
