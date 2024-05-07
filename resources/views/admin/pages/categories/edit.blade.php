@extends('admin.layout.main')
@section('content')
<form method="post" action="{{route('categories.update',$category->id)}}">
    @csrf
    @method('put')
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Category</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="Name ...">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="slug" id="slug" value="{{$category->slug}}" placeholder="Slug ..">
            <label for="slug">Slug</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" name="description" id="description" style="height: 150px;">{{$category->description}}</textarea>
            <label for="description">Description</label>
        </div>
        <button type="submit" class="btn btn-primary m-2">Update</button>
        <a href="{{route('categories.index')}}" class="btn btn-dark m-2">Back</a>
    </div> 
</form>          
@endsection