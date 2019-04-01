<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class SuperAdminController extends Controller
{
	public function logout() {
		// Session::get('id',null);
		// Session::get('name',null);
		// Session::get('email',null);
		Session::flush();
		return redirect('/login');
	}
    //
}
