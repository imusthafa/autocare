@extends('layouts.app')


@section('content')
<section id="main-slider" class="carousel banner-6">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(https://images.pexels.com/photos/70912/pexels-photo-70912.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 animation animated-item-3">
                            <div class="carousel-content">
                                <form method="POST" action="{{ url('search') }}">
                                    {{ csrf_field() }}
                                    <h3>Find NearBy Service</h3>
                                    <br>
                                    <div id="map" style="display: all; width: 100%;height: 276px;"></div>
                                    <div style="margin-top:10px">

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="lon" id="lon" placeholder="Longitude" />
                                        </div>


                                    </div>


                                    <br>
                                    <input type="submit" class="cd-btn" value="Search" />
                                </form>

                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
</section>



<section id="services-4" class="p_t_b">
    <div class="container">

        <div class="row">

            <div class="col-md-4 heading_left heading">
                <h2>Our <span>Services</span></h2>
                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">spare parts</a></li>
                    <li><a data-toggle="tab" href="#menu1">workshop</a></li>
                    <li><a data-toggle="tab" href="#menu2">painting</a></li>
                    <li><a data-toggle="tab" href="#menu3">Authorised service center</a></li>
                    <li><a data-toggle="tab" href="#menu3">fuel injection Center</a></li>

                </ul>

            </div>

        </div>

        <div class="tab-content">

            <div id="home" class="tab-pane fade in active">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="http://www.3benefitsof.com/wp-content/uploads/2013/07/car-service.png" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-1.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Auto <span>Care</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Auto Care is online web application for finding the nearest service for your vehicle in your location</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu1" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-2.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-2.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Engine <span>Transmission</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu2" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-3.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-3.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Engine <span>Fitness</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu3" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-4.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-4.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Battries</h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu4" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-5.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-5.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Mufflers &amp; <span>Exhaust</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu5" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-6.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-6.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Diagnostic <span>Services</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu6" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-7.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-7.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Electrical <span>Services</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

            <div id="menu7" class="tab-pane fade">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-work-wrap">
                            <div class="team-member text-center">
                                <div class="member-thumb"> <img src="images/service-8.jpg" alt="image">
                                    <div class="overlay2">
                                        <div class="overlay_inner">
                                            <a class="btn-icon" data-fancybox="gallery" href="images/service-8.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="services-tab-detail">

                            <div class="heading_left heading">
                                <h2>Electrical <span>Services</span></h2>
                                <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <ul class="services-list">
                                <li>Battery testing and replacement</li>
                                <li>Electrical System Diagnosis &amp; Repair</li>
                                <li>Brakes, rotors, and hoses</li>
                                <li>Fluid Exchange Services</li>
                                <li>Oil, Lube and Filter Services</li>
                                <li>Air Conditioning Service &amp; Repair</li>
                            </ul>


                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

@stop



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