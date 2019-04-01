@extends('admin.admin_master')
@section('dashboard_content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Publication Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0;?>
  	@foreach($category_list as $item)

    <tr>
      <th scope="row"><?php echo ++$i;?></th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{($item->publication_status==1?"Published":"Not Published")}}</td>
      <td><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
    </tr>
   

@endforeach
  </tbody>
</table>
@endsection