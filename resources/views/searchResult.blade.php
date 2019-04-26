@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:20px">


  <h3>Services</h3>
  <hr>
  <div class="row">

    @foreach($shops as $shop)

    <div class="col-md-4">
      <a href="{{ url('shop/'.$shop->id) }}">
        <div class="panel">
          <div class="panel-heading">
            <b> {{$shop->name}}</b>
          </div>
          <div class="panel-body">
            <p>
              {{$shop->description}}
            </p>

            <p> @if($shop->category == 1)
              Spareparts
              @elseif($shop->category == 2)
              Painting
              @elseif($shop->category == 3)
              Workshop
              @elseif($shop->category == 4)
              Authorised service center
              @elseif($shop->category == 5)
              Fuel injection center
              @endif</p>

            <p><i class="fa fa-globe"></i> {{$shop->address}}</p>
            <p> <i class="fa fa-location-arrow"></i> {{$shop->location}}</p>
          </div>
        </div>

      </a>
    </div>
    @endforeach


    @if(count($shops) == 0)
    <div>
      <div class="alert alert-info">
        There is no results matching
      </div>

    </div>
    @endif


  </div>


  @stop