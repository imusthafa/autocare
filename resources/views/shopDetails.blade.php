@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:20px">





  <div class="row">

    <div class="col-md-4">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title">{{$shop->name}}</h2>
          <p class="card-text">{{$shop->description}}</p>


          <p class="card-text">{{$shop->address}}</p>
          <h4 class="card-subtitle mb-2 text-muted">{{$shop->location}}</h4>
          <p>

            <i class="fa fa-th-list"></i>
            @if($shop->category == 1)
            Spareparts
            @elseif($shop->category == 2)
            Painting
            @elseif($shop->category == 3)
            Workshop
            @elseif($shop->category == 4)
            Authorised service center
            @elseif($shop->category == 5)
            Fuel injection center

            @endif

          </p>

        </div>

      </div>
    </div>
    <div class="col-md-8">
      <div id="map" style="display: all; width: 100%;height: 276px;"></div>


    </div>

  </div>


</div>

<div class="container">

  <h3>Reviews</h3>
  <hr>

  @foreach($feedbacks as $fd)
  <div class="panel">
    <div class="panel-collapse collapse in">
      <div class="panel-body">
        {{$fd->message}}
        <br>
        - {{$fd->name}}
      </div>
    </div>
  </div>

  @endforeach

  <form method="POST" action="{{ url('/feedback') }}">
    {{ csrf_field() }}
    <input type="hidden" name="serviceid" value="{{ $shop->id }}" />
    <div class="form-group">
      <label>Comments </label>
      <textarea placeholder="comments" class="form-control" name="message"></textarea>
      <div class="form-group">
        <label> Name </label>
        <input type="text" placeholder=" Name" class="form-control" name="name" />
      </div>

      <div class="form-group">
        <label>E-mail </label>
        <input type="email" placeholder="email" class="form-control" name="email" />
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-success">
      </div>

  </form>

</div>



<script>
  var customLabel = {};

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(<?php echo $shop->lat; ?>, <?php echo $shop->lon; ?>),
      zoom: 18
    });
    var infoWindow = new google.maps.InfoWindow;

    downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName('marker');
      Array.prototype.forEach.call(markers, function(markerElem) {
        var id = markerElem.getAttribute('id');
        var name = markerElem.getAttribute('name');
        var address = markerElem.getAttribute('address');
        var type = markerElem.getAttribute('type');
        var point = new google.maps.LatLng(
          parseFloat(markerElem.getAttribute('lat')),
          parseFloat(markerElem.getAttribute('lng')));

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = name
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = address
        infowincontent.appendChild(text);
        var icon = customLabel[type] || {};
        var marker = new google.maps.Marker({
          map: map,
          position: point,
          label: icon.label
        });
        marker.addListener('click', function() {
          infoWindow.setContent(infowincontent);
          infoWindow.open(map, marker);
        });
      });
    });
  }



  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
  }

  function doNothing() {}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5Z0NnHXEtgub4081O62H_gDtbfyo108k&callback=initMap">
</script>

@stop