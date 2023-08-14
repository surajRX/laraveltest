<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
 <a style="color: skyblue; background-color:black ;padding:10px 10px 10px 10px ;margin-left:30px" href="{{url('host')}}">New</a>
  <table width="100%">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
               <div class="card ">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Post name</th>
      <th scope="col">Post Slug</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Pincode</th>
      <th scope="col">Country</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
$id=1;
    @endphp
    @foreach($product as $item)
    <tr>
    
      <th scope="row">{{$id++}}</th>
      <td>{{$item->post_name}}</td>
      <td>{{$item->post_slug}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->state}}</td>
      <td>{{$item->city}}</td>
      <td>{{$item->pincode}}</td>
      <td>{{$item->country}}</td>
      <td> 
      
           @if($item->status == '1') 
               <button class='btn btn-sm btn-info'>Active</button>
                @else 
                  <button class='btn btn-sm btn-danger'>Inactive</button>  
                    @endif
                      </td>
      <td><a href="{{url('edit/'.$item->id)}}" class="btn btn-sm btn-info">Edit</a></td>
      <td><a href="{{url('delete/'.$item->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>