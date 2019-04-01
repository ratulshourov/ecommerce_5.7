@extends('admin.admin_master')
@section('dashboard_content')


   {!! Form::open(['url' => '/add_manufacture','method'=>'post','role'=>'form']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Manufacture Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="manufacture_name" placeholder="Enter Manufacture name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Description" name="manufacture_description"></textarea>
  </div>
  <div class="form-group">
  	<label for="exampleInputPassword1">Status</label>
    <select name="publication_status">
    	<option value='1'>published</option>
    	<option value="0">Unpublished</option>
    </select>
    
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
@endsection