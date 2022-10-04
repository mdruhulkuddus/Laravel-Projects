<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Student;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;
use Illuminate\Support\Facades\DB;
use Session;

class StudentController extends Controller
{
    public $image, $imageName, $directory, $imageUrl;
    public function studentRegister(){
        return view('frontEnd.student.register');
    }
    public function studentLogin(){
        return view('frontEnd.student.login');
    }
    public function saveStudent(Request $request){
        $student = new Student();
        $student->student_name = $request->student_name;
        $student->student_email = $request->student_email;
        $student->student_phone = $request->student_phone;
        $student->password = bcrypt($request->password);
        if($request->file('image')){
            $student->image = $this->saveImage($request);
        }
        $student->address = $request->address;
        $student->save();
        return back();
    }

    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/student-image/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }
    public function studentLoginCheck(Request $request){
        $studentInfo = Student::where('student_email', $request->user_name)
            ->orWhere('student_phone', $request->user_name)
            ->first();

        if($studentInfo){
            $existing_password = $studentInfo->password;
            if(password_verify($request->user_password, $existing_password)){
                Session::put('studentId', $studentInfo->id);
                Session::put('studentName', $studentInfo->student_name);
                return redirect('/');
            }
            else{
                return back()->with('message', 'Please valid Password');
            }
        }
        else{
            return back()->with('message', 'Please valid Email or Phone');
        }

    }

    public function studentLogout(){
        Session::forget('studentId');
        Session::forget('studentName');
        return redirect('/');
    }

    public function admission(Request $request)
    {
        $this->validate($request,[
            'confirmation' => 'required',
        ]);
        $admission = new Admission();
        $admission->student_id = $request->student_id;
        $admission->course_id = $request->course_id;
        $admission->confirmation = $request->confirmation;
        $admission->save();
        return back();
    }

    public function studentProfile($id){

        $stuEnrolCourse = DB::table('admissions')
            ->join('courses', 'admissions.course_id', '=', 'courses.id')
            ->select('admissions.*', 'courses.id', 'courses.course_name', 'courses.course_code',
                'courses.course_fee', 'courses.teacher_id')
            ->where('admissions.student_id','=', $id)
            ->get();
        $profileInfo = Student::find($id);
//        return $stuEnrolCourse;
        return view('frontEnd.student.student-profile',[
            'stuEnrolCourse' => $stuEnrolCourse,
            'profileInfo' => $profileInfo,
            ]);
    }

//    public function courseDetails($slug){
//        $courseDetails = DB::table('courses')
//            ->join('teachers', 'courses.teacher_id', 'teachers.id')
////            ->select('courses.*', 'teachers.*')
//            ->select('courses.*', 'teachers.name', 'teachers.email', 'teachers.phone')
//            ->where('slug', $slug)
//            ->first();
////        return $courseDetails;
//        return view('frontEnd.course.course-details', [
//            'course' => $courseDetails
//        ]);
//    }
}
