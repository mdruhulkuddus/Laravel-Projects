<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\HttpFoundation\replace;

class CourseController extends Controller
{
    public $course, $image, $imageName, $directory, $imgUrl;
    public function addCourse(){
        return view('admin.course.add-course');
    }

    public function saveCourse(Request $request){
        $this->validate($request,[
            'course_name' => 'required|unique:courses,course_name|string|min:10|max:50',
            'image' => 'file|filled'
        ]);
        $course = new Course();
        $course->teacher_id = $request->teacher_id;
        $course->course_name = $request->course_name;
        $course->course_code = $request->course_code;
        $course->slug = $this->makeSlug($request);
        $course->course_description = $request->course_description;
        $course->course_fee = $request->course_fee;
//        $this->image = $request->file('image');
        $course->image= $this->saveImage($request);
        $course->save();
        return back()->with('message', 'Course Information Save Successfully!');
    }
    private function makeSlug($request){
        if($request->slug){
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->course_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/course-image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }
    public function manageCourse(){
       $courses = DB::table('courses')
            ->join('teachers', 'courses.teacher_id', 'teachers.id')
            ->select('courses.*', 'teachers.name')
            ->get();
        return view('admin.course.manage-course',[
            'courses' => $courses
        ]);
    }

    public function deleteCourse(Request $request){
        $this->course = Course::find($request->course_id);
        if(is_file($this->course->image)) unlink($this->course->image);
        $this->course->delete();
        return back()->with('message', 'Deleted one course information');
    }

    public function editCourse($id){
//        return Course::find($id);
        return view('admin.course.edit-course',[
           'courseInfo' => Course::find($id)
        ]);
    }

    public function updateCourse(Request $request){
//    return $request->course_id;

        $this->course = Course::find($request->course_id);
        $this->course->teacher_id = $request->teacher_id;
        $this->course->course_name = $request->course_name;
        $this->course->course_code = $request->course_code;
        $this->course->slug = $this->makeSlug($request);
        $this->course->course_description = $request->course_description;
        $this->course->course_fee = $request->course_fee;
        if($request->file('image')){
            if(is_file($this->course->image)){unlink($this->course->image);}
            $this->course->image = $this->saveImage($request);
        }
        $this->course->save();
        return redirect('/manage-course')->with('message', 'Course Information Update Successfully!');
    }

    public function manageApplicant(){
       $applicants = DB::table('admissions')
            ->join('students', 'admissions.student_id', '=', 'students.id')
            ->join('courses', 'admissions.course_id', '=', 'courses.id')
            ->select('students.student_name', 'students.student_email', 'students.student_phone',
                'courses.course_name', 'courses.course_code', 'courses.course_fee', 'courses.teacher_id',
                'admissions.confirmation', 'admissions.id'
            )
            ->get();

        return view('admin.teacher.manage-applicant', [
            'applicants' => $applicants
        ]);
    }

    public function applicantOverview(){
        $totalStudent = Admission::count();
        $aspStudent = Admission::where('course_id', '10')->count();
        $aspStudent = Admission::where('course_id', '10')->count();
        $msofficeStudent = Admission::where('course_id', 9)->count();
        return view('admin.teacher.applicant-overview',[
            'totalStudent' => $totalStudent,
            'aspStudent' => $aspStudent,
            'msofficeStudent' => $msofficeStudent,
        ]);
    }
}
