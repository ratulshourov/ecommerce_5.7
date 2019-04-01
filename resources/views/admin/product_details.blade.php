  @extends('admin.admin_master')
@section('dashboard_content')
{{$single_product->product_name}}<br/>
{{$single_product->categoriesName}}<br/>

<img src="{{asset($single_product->product_image)}}" width="300" alt="Not">
@endsection