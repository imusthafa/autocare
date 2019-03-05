@extends('layouts.admin')

@section('content')
 
<!-- 1. Container  -->
<div class="container"> 
 
<!-- 2.  Form method post , route admin/user/edit/id  -->
<form method="post" action="{{ url('admin/user/edit/'.$user->id) }}" >
 {{csrf_field()}}
<!-- 3 Fields : name, email -->
<div class="form-group">
 <label>Name</label>
 <input type="text" placeholder="name" class="form-control" name="name" value="{{ $user->name }}" />
</div>

<div class="form-group">
 <label>Email</label>
 <input type="text" placeholder="email" class="form-control" name="email" value="{{ $user->email }}" />
 </div>

<!-- 4. Submit button -->
<div class="form-group">
<input type="submit" ></div>
</form>
</div>
@stop 

