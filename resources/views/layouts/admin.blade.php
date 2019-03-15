<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script src="{{ url('admin_style/assets/js/require.min.js') }}"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ url('admin_style/assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ url('admin_style/assets/js/dashboard.js') }}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ url('admin_style/assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ url('admin_style/assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ url('admin_style/assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ url('admin_style/assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ url('admin_style/assets/plugins/input-mask/plugin.js') }}"></script>
  </head>
  <body class="">














 
<body>


<div class="page">

<div class="page-main">
<div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="{{ url('/') }}">
               Car Services
              </a>
              
              
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    <li class="nav-item">        
        <a href="{{ url('/admin/') }}" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li> 
                  
                  <li class="nav-item">        
        <a href="{{ url('admin/users/') }}" class="nav-link "><i class="fe fe-users"></i> Users</a>
                  </li> 
                  
                    
                  <li class="nav-item">        
        <a href="{{ url('admin/services/') }}" class="nav-link "><i class="fas fa-wrench"></i> Services</a>
                  </li> 
                  
                  
                </ul>
              </div>
            </div>
          </div>
          

        </div><div class="my-3 my-md-5">
          <div class="container">
@yield('content')
              </div>
    </div>

</div>
</div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @include('flashy::message')

</body>
</html>
