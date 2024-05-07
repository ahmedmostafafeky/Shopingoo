@extends('admin.layout.main')
@section('content')
<form method="post" action="/admin/contact/edit" >
    @csrf
    <div class="bg-light rounded h-100 p-4">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="address" id="address" value="{{$contact['address']}}" placeholder="Address ...">
            <label for="address">Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="phone" id="phone" value="{{$contact['phone']}}" placeholder="phone ..">
            <label for="phone">Phone</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" value="{{$contact['email']}}" placeholder="email ..">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" id="location" value="{{$contact['location']}}" placeholder="location ..">
            <label for="location">Location</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="working" id="working" value="{{$contact['working']}}" placeholder="working ..">
            <label for="working">Working houres</label>
        </div>
        
        <button type="submit" class="btn btn-primary m-2">Add</button>
    </div> 
</form>          
@endsection