<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use http\Message;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public $author,$image,$imageName,$directory,$imgUrl;
    public function addAuthor(){
        return view('admin.author.add-author');
    }
    public function saveAuthor(Request $request){
        $this->author= new Author();
        $this->author->author_name=$request->author_name;
        $this->author->author_biography=$request->author_biography;
        $this->author->image=$this->saveImage($request);
        $this->author->save();
        return back()->with('message','Author added successfully');
    }
    public function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/author-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=> Author::all()
        ]);
    }
    public function status(Request $request){
//        return $id && $for;
        return $request;
        if($for == 'cat'){
            $this->author= Category::find($id);
        }
//        return $this->author;
        if($this->author->status == 1){
            $this->author->status = 0;
            $this->author->save();
            return back();
        }else{
            $this->author->status=1;
            $this->author->save();
            return back();
        }
    }
    public function deleteAuthor(Request $request){
        $this->author=Author::find($request->author_id);
        $this->author->delete();
        return back()->with('message','Delete successfully');
    }
    public function editAuthor($id){
        return view('admin.author.edit-author',[
            'author'=>Author::find($id)
        ]);
    }
    public function updateAuthor(Request $request){
        $this->author= Author::find($request->author_id);

        $this->author->author_name=$request->author_name;
        $this->author->author_biography=$request->author_biography;
        $this->author->image=$this->saveImage($request);
        $this->author->save();
        return redirect('manage-author')->with('message','Author Update successfully');
    }
}
