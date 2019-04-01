  @extends('admin.admin_master')
@section('dashboard_content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">CategoryName</th>
      <th scope="col">ManufactureName</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter=0;
    ?>
    @foreach($products as $single_product)

    <tr>
      <th scope="row">{{ ++$counter }}</th>
      <td>{{$single_product->product_name}}</td>
      <td>{{$single_product->categoriesName}}</td>
      <td>{{$single_product->manufactureName}}</td>
      <td><img src="{{asset($single_product->product_image)}}" width="60" alt="No Image" /></td>
      <td>{{($single_product->publication_status==1)?'Published':'Not Published'}}</td>
      <td><a href="{{ url('/view/'.$single_product->id)}}" class="btn btn-primary">View</a><a href="{{ url('/edit_product/'.$single_product->id)}}" class="btn btn-primary">Edit</a> <a href="{{url('/delete_delete/'.$single_product->id)}}" class="btn btn-danger" onclick="return confirm('Are you want to delete the product');">Delete</a></td>
    </tr>
   
    @endforeach

  </tbody>
</table>
@endsection