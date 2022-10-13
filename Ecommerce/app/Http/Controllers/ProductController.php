<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public $product;
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product',[
            'products' => product::all()
            ]);
    }

    public function saveProduct(Request $request){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_image = $this->saveImage($request);
        $product->save();
        return back()->with('message', 'Product Information Save Successfully');
//        return $request;
    }
    private function saveImage($request){
        $image = $request->file('product_image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'adminAsset/upload/product-image/';
        $imgUrl = $directory.$imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }

    public function deleteProduct($id){
        $this->product = product::find($id);
        if(is_file($this->product->product_image))
            unlink($this->product->product_image);
        $this->product->delete();
        return back()->with('message','Deleted one product successfully');
//        return $this->product;

    }
}
