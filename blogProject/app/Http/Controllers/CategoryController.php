<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
       $category = new Category();
       $category->category_name=$request->category_name;
       $category->save();
       return back();
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories'=> Category::all()
        ]);
    }

    public function deleteCategory(Request $request){
//        return $request;
        $this->category= Category::find($request->category_id);
        $this->category->delete();
        return back()->with('message','Deleted');

    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category'=> Category::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        $this->category= Category::find($request->category_id);

        $this->category->category_name=$request->category_name;
        $this->category->save();
        return redirect('manage-category')->with('message','Updated successfullu');
    }
}
