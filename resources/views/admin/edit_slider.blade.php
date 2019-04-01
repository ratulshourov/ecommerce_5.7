@extends('admin.admin_master')
@section('dashboard_content')
{!! Form::open(['url' => '/slider/update','method'=>'post','name'=>'productEditForm','role'=>'form','enctype'=>'multipart/form-data']) !!}
  
<input type="hidden" name="slider_id" value="{{$slider_edit->id}}">  
  
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
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
<script type="text/javascript">
 
   document.forms['productEditForm'].elements['publication_status'].value={{$slider_edit->publication_status}};
</script>
@endsection