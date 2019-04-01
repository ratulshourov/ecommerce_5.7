<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
	public function index() {
		return view('admin.category_add');
	}
	public function category_entry(Request $request) {
		$category=new Category();
		$category->name=$request->category;
		$category->description=$request->category_description;
		$category->publication_status=$request->publication_status;
		$category->save();
		Session::put('message','Category Added Successfully');
		return redirect('/add_category');
	}
	public function list_category() {
		$category_list=Category::all();
		// echo "<pre>";
		// print_r($category_list);
		// echo "</pre>";
		return view('admin.category_list',['category_list'=>$category_list]);
	}
    //
}
