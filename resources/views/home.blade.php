@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px;">


  <a href="{{ url('/services/new') }}" class="btn btn-success">New Service</a>
  <table class="table table-striped">
    <thead>
      <td>
        <tr>
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
          <a href="{{ url('/service/delete/'.$service->id) }}" class="btn btn-success">Delete </a>
          <a href="{{ url('/service/edit/'.$service->id) }}" class="btn btn-success">Edit </a>
        </td>

      </tr>
      @endforeach

      @if(count($services) == 0)
      <tr>
        <td colspan="5">
          You have added no services
        </td>
      </tr>
      @endif
    </tbody>
  </table>

</div>

@endsection