@extends('admin.layout.main')
@section('content')
<form method="post" action="{{route('slider.update',$slider->id)}}">
    @csrf
    @method('put')
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Category</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="title" id="name" value="{{$slider->title}}" placeholder="Name ...">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cto" id="cto" value="{{$slider->cto}}" placeholder="Call To Action ..">
            <label for="cto">Call To Action</label>
        </div>
        <div class="form-floating mb-3">
            <label for="photo" class="form-label">Image:</label>                
            <input class="form-control" type="file" id="photo" name="photo">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" name="description" id="description" style="height: 150px;">{{$slider->description}}</textarea>
            <label for="description">Description</label>
        </div>
        <button type="submit" class="btn btn-primary m-2">Update</button>
        <a href="{{route('slider.index')}}" class="btn btn-dark m-2">Back</a>
    </div> 
</form>  
@endsection