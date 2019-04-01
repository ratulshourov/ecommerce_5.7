 @extends('admin.admin_master')
@section('dashboard_content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
     
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter=0;
    ?>
    @foreach($slider_list as $single_slider)

    <tr>
      <th scope="row">{{ ++$counter }}</th>
     
      <td><img src="{{asset($single_slider->slider_image)}}" width="60" alt="No Image" /></td>
      <td>{{($single_slider->publication_status==1)?'Published':'Not Published'}}</td>
      <td><a href="{{ url('/edit_slider/'.$single_slider->id)}}" class="btn btn-primary">Edit</a> <a href="{{url('/delete_slider/'.$single_slider->id)}}" class="btn btn-danger" onclick="return confirm('Are you want to delete the product');">Delete</a></td>
    </tr>
   
    @endforeach

  </tbody>
</table>
@endsection