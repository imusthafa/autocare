@extends('layouts.admin')

@section('content')
<div class="container">
  
  
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action </th>
   </tr>
  </thead>
  <tbody>
    
  @foreach($users as $user)
    <tr>    
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
     <td> 
    <a href ="{{ url('admin/user/delete/'.$user->id) }}" class="btn btn-success">Delete </a>
    <a href ="{{ url('admin/user/edit/'.$user->id) }}" class="btn btn-success">Edit </a>
    </td>
               
    </tr>
@endforeach
  </tbody>
</table>


{{ $users->render() }}
</div>

@endsection
