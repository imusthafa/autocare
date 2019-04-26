@extends('layouts.admin')
@section('content')

<div class="container">

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">location</th>
        <th scope="col">address</th>
        <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>

      @foreach($services as $service)
      <tr>
        <td>{{$service->name}}</td>
        <td>
          @if($service->category == 1) Spareparts
          @elseif ($service->category == 2 ) Painting
          @elseif ($service->category == 3 ) Workshop
          @elseif ($service->category == 4 ) Authorised service center
          @elseif ($service->category == 5 ) Fuel injection Center
          @endif



        </td>
        <td>{{$service->location}}</td>
        <td>{{$service->address}}</td>
        <td>
          <a href="{{ url('admin/service/delete/'.$service->id) }}" class="btn btn-success">Delete </a>
          <a href="{{ url('admin/service/edit/'.$service->id) }}" class="btn btn-success">Edit </a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection