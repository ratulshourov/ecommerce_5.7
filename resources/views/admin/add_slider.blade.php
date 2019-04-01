	@extends('admin.admin_master')
@section('dashboard_content')
  {!! Form::open(['url' => '/slider_entry','method'=>'post','role'=>'form','enctype'=>'multipart/form-data']) !!}
  <br/>
  <br/>
  <h3> SLider Entry  </h3>
   <div class="form-group">
   
    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="pic" >
    
  </div>
  <div class="form-group">
  	<label for="exampleInputPassword1">Status</label>
    <select name="publication_status">
    	<option value='1'>published</option>
    	<option value="0">Unpublished</option>
    </select>
    
  </div>
  <div class="form-group">
  	<input type="submit" class="btn btn-primary" name="submit" value="Add">
  </div>

  {!! Form::close() !!}
@endsection