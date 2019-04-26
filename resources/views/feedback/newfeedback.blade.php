@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ url('/feedback') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Comments </label>
            <textarea placeholder="comments" class="form-control" name="message"></textarea>
            <div class="form-group">
                <label> Name </label>
                <input type="text" placeholder=" Name" class="form-control" name="name" />
            </div>

            <div class="form-group">
                <label>E-mail </label>
                <input type="email" placeholder="email" class="forn-control" name="email" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success">
            </div>

    </form>
    <h1>leave the comments here for reviews</h1>
</div>
@endsection