<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function viewCategory(){
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }
    public function addCategory(Request $request){
        $request->validate(
            [
                'category'=>'required|unique:categories,category_name',
            ]
            );

        $category = new Category();
        $category->category_name = $request['category'];
        $result = $category->save();
        if($result){
            return redirect('/view-category')->with('success','Category Added Succesfully');
        }
        else{
            return redirect('/view-category')->with('fail','Category Adding Unsuccesfull');

        }
        // echo "<pre>";
        // print_r($request->toArray());
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return redirect('/view-category')->with('success','Category deleted succesfully');
        }
        else{
            return redirect('/view-category')->with('fail','The id you have entered is not in database');
        }
    }


    public function editCategory($id){
        $category = Category::find($id);
        if($category){
            return view('admin.editCategory',compact('category'));
        }
        else{
            return redirect('/view-category')->with('fail','The id which you want to edit is not on database');
        }
    }

    public function updateCategory(Request $request,$id){
        $request->validate(
            [
                // 'category_id'=>'required|unique:categories,category_id',
                'category_name'=>'required|unique:categories,category_name',
            ]
            );
        $category = Category::find($id);
        if($category){
            $category->category_name = $request['category_name'];
            $category->save();
            return redirect('/view-category')->with('success','Category updated Succefully');
        }
        else{
            return redirect('/view-category')->with('fail','The id which you want to edit is not on database');

        }
    

        
        // echo "<pre>";
        // print_r($request->toArray());
    }


    public function addProductForm()    {
        // $products = Product::with('category')->get();
        $categories= Category::all();
        return view('admin.addProduct',compact('categories'));
    }

    public function addProduct(Request $request){
        $request->validate([
            'product_title'=>'required',
            'description'=>'required',
            'product_quantity'=>'required',
            
            'product_category'=>'required',
            'product_price'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png',
        ]);

        $product = new Product();
        $product->product_title=$request['product_title'];
        $product->product_description=$request['description'];
        $product->product_quantity=$request['product_quantity'];
        $product->discount_price=$request['discount_price'];
        $product->category_id=$request['product_category'];
        $product->product_price=$request['product_price'];

        // for Image

        $fileName =time().'-niraj.'.$request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('products_image',$fileName,'public');
        $product->product_image='/storage/'.$path;
        
        $result= $product->save();
        if($result){
            return redirect('/show-product');
        }


        // echo "<pre>";
        // print_r($request->toArray());
    }

    public function showProduct(){
        $products = Product::with('category')->get();
        return view('admin.showProduct',compact('products'));
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return redirect('/show-product')->with('success','Product Deleted Succesfully.');
        }
        else{
            return redirect('/show-product')->with('fail','The id you provided are not in database.');
        }
    }

    public function editProduct($id){
        $product = Product::with('category')->where('product_id',$id)->first();
        $categories = Category::all();
        if($product){

            return view('admin.editProduct',compact('product','categories'));
        }
        else{
            return redirect('/show-product')->with('fail','The id you provided are not in database.');
        }
    }


    public function updateProduct(Request $request,$id){
        $request->validate([
            'product_title'=>'required',
            'description'=>'required',
            'product_quantity'=>'required',
            
            'product_category'=>'required',
            'product_price'=>'required',
            
        ]);

        $product = Product::where('product_id',$id)->first();

        
        if($product){
            if ($request->hasFile('image')) {
                $fileName = time() . '-niraj.' . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('products_image', $fileName, 'public');
                $product->product_image = '/storage/' . $path;
            }
            
            // $fileName =time().'-niraj.'.$request->file('image')->getClientOriginalExtension();
            // $path = $request->file('image')->storeAs('products_image',$fileName,'public');
            // $product->product_image = '/storage/'.$path;

            $product->product_title=$request['product_title'];
            $product->product_description=$request['description'];
            $product->product_quantity=$request['product_quantity'];
            $product->discount_price=$request['discount_price'];
            $product->category_id=$request['product_category'];
            $product->product_price=$request['product_price'];
            $product->save();
            
            return redirect('/show-product')->with('success','Product Updated Succesfully.');

        }
        // echo "<pre>";
        // print_r($request->toArray());
    }
}
