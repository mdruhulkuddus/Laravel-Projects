<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class SMSController extends Controller
{
    public function index(){
//        $course =  Course::orderBy('id', 'desc')->take(3)->get();
//        return $course;
        return view('frontEnd.home.home', [
           'courses' => Course::orderBy('id', 'desc')->take(3)->get()
        ]);
    }

    public function about(){
        return view('frontEnd.about.about');
    }
    public function course(){
        return view('frontEnd.course.course');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }

    public function courseDetails($slug){
        $courseDetails = DB::table('courses')
            ->join('teachers', 'courses.teacher_id', 'teachers.id')
//            ->select('courses.*', 'teachers.*')
            ->select('courses.*', 'teachers.name', 'teachers.email', 'teachers.phone')
            ->where('slug', $slug)
            ->first();
//        return $courseDetails;
        return view('frontEnd.course.course-details', [
            'course' => $courseDetails
        ]);


    }


}
