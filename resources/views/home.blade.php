@extends('layouts.app')

@section('content')
<div class="container">
  
  
<a href="{{ url('/services/new') }}" class="btn btn-success">New Service</a>
<table class="table table-striped">
  <thead>
   <td> <tr>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">address</th>
      <th scope="col">Location</th>
      <th scope="col">Action </th>
   </tr>
  </thead>
  <tbody>
    
  @foreach($services as $service)
    <tr>    
      <td>{{$service->name}}</td>
      <td>{{$service->category}}</td>
      <td>{{$service->location}}</td>
    <td> 
    <a href ="{{ url('/service/delete/'.$service->id) }}" class="btn btn-success">Delete </a>
    <a href ="{{ url('/service/edit/'.$service->id) }}" class="btn btn-success">Edit </a>
    </td>
               
    </tr>
@endforeach
  </tbody>
</table>

</div>

@endsection
