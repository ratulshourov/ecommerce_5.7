<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;
class SliderController extends Controller
{
	public function index() {
		return view('admin.add_slider');
		
	}
	
	public function slider_entry(Request $request) {
	$slider_entry =new Slider();
	$slider_entry->slider_image='Image';
	$slider_entry->publication_status=$request->publication_status;
	$slider_entry->save();
	$last_id=$slider_entry->id;
	 $picture_info=$request->file('pic');
	 $pic_name_only=$last_id.$picture_info->getClientOriginalName();
	 $folder_path='slider_image/';
	 $picture_info->move($folder_path,$pic_name_only);
	 
	 $pic_url_for_db=$folder_path.$pic_name_only;
	 $slider_update_for_picture=Slider::find($last_id);
	 $slider_update_for_picture->slider_image=$pic_url_for_db;
	 $slider_update_for_picture->save();
	 return redirect('/add_slider');

	}
	public function list_slider() {
		$slider_list=DB::table('sliders')->where('publication_status',1)->get();
		return view('admin.list_slider',['slider_list'=>$slider_list]);
		// echo "<pre>";
		// print_r($slider_list);
		// echo "</pre>";

	}
	public function edit_slider($id) {
		$slider_edit=Slider::where('id',$id)->first();
		return view('admin.edit_slider',['slider_edit'=>$slider_edit]);
	}
	public function update_slider(Request $request) {
  $slider=Slider::where('id',$request->slider_id)->first();
         $picinfo=$request->file('pic');
         //To get the image name only
        
         
         if(isset($picinfo)) {
           if(file_exists($slider->pic)) {
            unlink($slider->pic);
           }
             $picture_image_name=$request->slider_id.$picinfo->getClientOriginalName();
             $folder_path='slider_image/';
             $pic_url=$folder_path.$picture_image_name;
             $picinfo->move($folder_path,$picture_image_name);
            echo "Update Hbe".$pic_url;
         } else {
            echo "old thakbe";
         } 
         //insert db 
         $product_table_work=Slider::find($request->slider_id);
         $product_table_work->slider_image=$pic_url;
         $product_table_work->save();
         return redirect('/list_slider');
	}
    //
}
