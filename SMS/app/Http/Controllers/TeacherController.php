<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;
use Session;
use Hash;

class TeacherController extends Controller
{
    public $teacher, $image, $imageName, $directory, $imgUrl;
    public function index(){
        return view('admin.teacher.add-teacher');
    }
    public function saveTeacher(Request $request){
       $this->teacher = new Teacher();
        $this->teacher->name = $request->name;
        $this->teacher->phone = $request->phone;
        $this->teacher->email = $request->email;
        $this->teacher->password = bcrypt('12345678');
        $this->teacher->image = $this->saveImage($request);
        $this->teacher->address = $request->address;
        $this->teacher->save();
        return back()->with('message', 'Teacher Information Save Successfully!');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'adminAsset/teacher-image/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }
    public function manageTeacher(){
        return view('admin.teacher.manage-teacher',[
            'teachers' => Teacher::all(),
        ]);
    }
    public function deleteTeacher(Request $request){
        $this->teacher = Teacher::find($request->teacher_id);
        if(is_file($this->teacher->image)){
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return back()->with('message', 'Teacher Information Deleted Successfully!');
    }
    public function editTeacher($id){
        return view('admin.teacher.edit-teacher',[
           'teacherInfo' => Teacher::find($id),
        ]);
    }
    public function updateTeacher(Request $request){
//        return $request->id;
        $this->teacher = Teacher::find($request->teacher_id);
        $this->teacher->name= $request->name;
        $this->teacher->phone = $request->phone;
        $this->teacher->email = $request->email;
        $this->teacher->address = $request->address;
        if($request->file('image')){
            if(is_file($this->teacher->image)){unlink($this->teacher->image);}
            $this->teacher->image = $this->saveImage($request);
        }
        $this->teacher->save();
        return redirect('/manage-teacher')->with('message', 'Teacher Information Update Successfully!');
    }

    public function teacherLogin(){
        return view('admin.teacher.login');
    }
    public function teacherLoginCheck(Request $request)
    {
        $loginInfo = Teacher::where('email', $request->user_name)->orWhere('phone', $request->user_name)
            ->first();
        if($loginInfo){
            $exPassword = $loginInfo->password;
            if(password_verify($request->password, $exPassword)){
                Session::put('teacherId',$loginInfo->id);
                Session::put('teacherName',$loginInfo->name);
                return redirect('/');
            }
            else{
                return back()->with('message', 'Use Valid Password');
            }
        }
        else{
            return back()->with('message', 'Use Valid Email or Phone');
        }
    }

    public function teacherLogout(){
        Session::forget('teacherId');
        Session::forget( 'teacherName');
        return redirect('/');
    }
    public function teacherProfile(){
        return view('admin.teacher.profile');
    }



}
