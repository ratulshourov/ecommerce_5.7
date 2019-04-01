<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacture;
use Session;

class ManufactureController extends Controller
{
	public function index() {
		return view('admin.add_manufacture');
	}
	public function manufacture_entry(Request $request) {
		//dd($request->all());
		$manufacture=new Manufacture();
		$manufacture->name=$request->manufacture_name;
		$manufacture->description=$request->manufacture_description;
		$manufacture->publication_status=$request->publication_status;
		$manufacture->save();
		Session::put('message','Manufacture Added Successfully');
		return redirect('/add_manufacture');
	// $manufacture=new Manufacture();
	// 	$manufacture->name=$request->manufacture;
	// 	$manufacture->description=$request->manufacture_description;
	// 	$manufacture->publication_status=$request->publication_status;
	// 	$manufacture->save();
	// 	Session::put('message','manufacture Added Successfully');
	// 	return redirect('/add_manufacture');
	}
	public function list_manufacture() {
		$manufacture_list=Manufacture::all();
		// echo "<pre>";
		// print_r($category_list);
		// echo "</pre>";
		return view('admin.manufacture_list',['manufacture_list'=>$manufacture_list]);
	}
    //
}
