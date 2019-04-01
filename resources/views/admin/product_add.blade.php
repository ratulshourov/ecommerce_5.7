	@extends('admin.admin_master')
@section('dashboard_content')
  {!! Form::open(['url' => '/product_entry','method'=>'post','role'=>'form','enctype'=>'multipart/form-data']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">ProductName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productName" placeholder="Enter category name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select name="category_id">
      @foreach($categories as $item) 
      <option value='{{$item->id}}'>{{$item->name}}</option>
      @endforeach
    </select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Manufacture</label>
    <select name="manufacture_id">
      @foreach($manufactures as $item) 
      <option value='{{$item->id}}'>{{$item->name}}</option>
      @endforeach
    </select>
    
  </div>
   <div class="form-group">
   
    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="pic" >
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Qty</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="qty" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ShortDescription</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="short_description" name="short_description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LongDescription</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Description" name="long_description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Color</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Color" name="color"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Size" name="size"></textarea>
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