<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Manufacture;
use App\Product;

class HomeController extends Controller
{
	public function index() {
		$products_list=DB::table('products')
    							->join('categories','categories.id','=','category_id')
    							->join('manufactures','manufactures.id','=','manufacture_id')
    							->select('products.*','categories.name as categoriesName','manufactures.name as manufactureName')
    							->limit(4)
    							
    							->get();
    	$all_published_product=view('home')->with('products_list',$products_list);

		return view('master')->with('home',$all_published_product);
	}
    //
}
