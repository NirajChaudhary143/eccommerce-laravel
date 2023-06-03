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
    
}
