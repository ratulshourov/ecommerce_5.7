@extends('admin.admin_master')
@section('dashboard_content')
{!! Form::open(['url' => '/product/update','method'=>'post','name'=>'productEditForm','role'=>'form','enctype'=>'multipart/form-data']) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">ProductName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$product->product_name}}">
  <input type="hidden" name="product_id" value="{{$product->id}}">  
  </div>
<input type="hidden" name="product_id" value="{{$product->id}}">  
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select name="category_name">
      @foreach($categories as $item) 
      <option value='{{$item->id}}'>{{$item->name}}</option>
      @endforeach
    </select>
    
  </div>
   <div class="form-group">
   
    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" name="pic" >
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{$product->price}}" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Qty</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="qty" value="{{$product->qty}}" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ShortDescription</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="short_description" value="{{$product->short_description}}" name="short_description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LongDescription</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Description" name="long_description" value="{{$product->long_description}}"></textarea>
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
<script type="text/javascript">
  document.forms['productEditForm'].elements['category_name'].value={{$product->category_id}};
   document.forms['productEditForm'].elements['publication_status'].value={{$product->publication_status}};
</script>
@endsection