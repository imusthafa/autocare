@extends('layouts.app')

@section('content')
<div class="container">
  
  
<a href="{{ url('/services/new') }}" class="btn btn-success">New Service</a>
<table class="table table-striped">
  <thead>
   <td> <tr>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Action <div class="form-group">

    
    </th>
   </tr>
  </thead>
  <tbody>
    
  @foreach($services as $service)
    <tr>    
      <th>{{$service->name}}</th>
      
               
    </tr>
@endforeach
  </tbody>
</table>

</div>

@endsection
