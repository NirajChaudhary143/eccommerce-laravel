<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
        return view('admin.addProduct');
    }

    public function addProduct(Request $request){
        // echo "<pre>";
        // print_r($request->toArray());
    }
}
