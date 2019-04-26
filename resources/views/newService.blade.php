@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:50px;">



    <form method="POST" action="{{ url('services/new') }}">
        {{ csrf_field() }}


        <div class="form-group">
            <label>Shop Name </label>
            <input type="text" placeholder="Shop Name" class="form-control" name="name" />
        </div>

        <div class="form-group">
            <label>Description </label>
            <textarea placeholder="Description" class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Address </label>
            <textarea placeholder="Address" class="form-control" name="address"></textarea>
        </div>

        <div class="form-group">
            <label>Location </label>
            <input type="text" placeholder="Location" class="form-control" name="location" />
        </div>


        <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-right">GEO Details</label>

            <div class="col-md-12">


                @if ($errors->has('location'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('location') }}</strong>
                </span>
                @endif

                <div class="row text-center">

                    <div class="col-md-6"><input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude" /></div>
                    <div class="col-md-6"> <input type="text" class="form-control" name="lon" id="lon" placeholder="Longitude" />
                    </div>
                </div>




                <div id="map" style="display: all; width: 100%;height: 276px;"></div>
            </div>


        </div>

        <div class="form-group">
            <label>Category </label>
            <select placeholder="Category" class="form-control" name="category">
                <option value="1">Spareparts</option>
                <option value="2">Painting</option>
                <option value="3">Workshop</option>
                <option value="4">Authorised Service Center</option>
                <option value="5">Fuel injection Center</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>


    </form>

</div>
@endsection

@section('javascript')

<script>
    var customLabel = {};

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(10.744144409678745, 76.43385887145996),
            zoom: 18
        });

        google.maps.event.addListener(map, "click", function(e) {
            var latLng = e.latLng;
            let lat = latLng.lat();
            let lon = latLng.lng()

            document.getElementById("lat").value = lat;
            document.getElementById("lon").value = lon;

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



@endsection