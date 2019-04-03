@extends('layouts.admin')

@section('content')
<div class="row row-cards">


<div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-blue">
                      <i class="fe fe-user"></i>
                    </div>
                    <div class="h1 m-0">{{ $users }}</div>
                    <div class="text-muted mb-4">Total Users</div>
                  </div>
                </div>
              </div>



              
<div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-blue">
                      <i class="fe fe-book"></i>
                    </div>
                    <div class="h1 m-0">{{ $users }}</div>
                    <div class="text-muted mb-4">Total Services</div>
                  </div>
                </div>
              </div>
 <div>             
 <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date</th>
                         </tr>
                      </thead>
                      <tbody>
@foreach($newUsers as $usr)
                        <tr>
                           <td>{{$usr->name}}</td>
                          <td>{{$usr->email}}</td>
                          <td class="text-nowrap">{{$usr->created_at}}</td>
                         </tr> 
@endforeach

                      </tbody>
                    </table>

</div>
<div>
<table class="table table-bordered table-dark">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Category</th>
                          <th>location</th>
                          <th>address</th>
                          <th>Date</th>
                         </tr>
                      </thead>
                      <tbody>
@foreach($newService as $serv)
                        <tr>
                           <td>{{$serv->name}}</td>
                          <td>{{$serv->Category}}</td>
                          <td>{{$serv->location}}</td>
                          <td>{{$serv->address}}</td>
                          <td class="text-nowrap">{{$serv->created_at}}</td>
                         </tr> 
@endforeach

                      </tbody>
                    </table>

</div>
</div>
              
@stop 