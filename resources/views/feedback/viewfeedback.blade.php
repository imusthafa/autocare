@extends('layouts.app')
@section('content')

<div class="container">



  <table class="table table-striped">
    <thead>
      <td>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">email</th>

          <th scope="col">message</th>
          <th scope="col">Action </th>
        </tr>
    </thead>
    <tbody>

      @foreach($feedbacks as $feedback)
      <tr>
        <th>{{$feedback->name}}</th>
        <th>{{$feedback->email}}</th>
        <th>{{$feedback->message}}</th>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection