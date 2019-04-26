@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:40px;">

    <form method="POST" action="{{ url('service/edit/'.$service->id) }}">
        {{ csrf_field() }}


        <div class="form-group">
            <label>Shop Name </label>
            <input type="text" placeholder="Shop Name" class="form-control" name="name" value="{{ $service->name}}" />
        </div>

        <div class="form-group">
            <label>Image </label>
            <input type="text" placeholder="Image URL" class="form-control" name="image" value="{{ $service->image }}" />
        </div>

        <div class="form-group">
            <label>Description </label>
            <textarea placeholder="Description" class="form-control" name="description">{{ $service->description}}</textarea>
        </div>
        <div class="form-group">
            <label>Address </label>
            <textarea placeholder="Address" class="form-control" name="address">{{ $service->address}}</textarea>
        </div>

        <div class="form-group">
            <label>Location </label>
            <input type="text" placeholder="Location" class="form-control" name="location" value="{{ $service->location}}" />
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