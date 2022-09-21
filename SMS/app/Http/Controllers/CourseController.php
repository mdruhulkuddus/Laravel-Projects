<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(){
        return view('admin.course.add-course');
    }
    public function manageCourse(){

    }
}
