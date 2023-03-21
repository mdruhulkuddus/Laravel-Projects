<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    public $blog,$image,$imageName,$directory,$imgUrl;
    public  function addBlog(){
        return view('admin.blog.add-blog',[
            'categories'=>Category::where('status',1)->orderby('id','desc')->get(),
            'authors'=>Author::where('status',1)->orderby('id','desc')->get()
        ]);
    }
    public function saveBlog(Request $request){
        $this->blog = new Blog();
        $this->blog->category_id = $request->category_id;
        $this->blog->author_id = $request->author_id;
        $this->blog->title = $request->title;
        $this->blog->slug = $this->makeSlug($request);
        $this->blog->description = $request->description;
        $this->blog->date = $request->date;
        $this->blog->image =$this->saveImage($request);
        $this->blog->save();
        return back();
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='frontEndAsset/blog-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    private function makeSlug($request){
        if($request->slug){
            $str=$request->slug;
            return preg_replace('/\s+/u','-',trim($str));
        }
        $str=$request->course_name;
        return preg_replace('/\s+/u','-',trim($str));
    }
    public function manageBlog(){
        $blogs=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
//            ->where('blogs.status',1)
            ->orderby('id','desc')
            ->get();
        return view('admin.blog.manage-blog',[
            'blogs'=>$blogs
        ]);
    }
}
