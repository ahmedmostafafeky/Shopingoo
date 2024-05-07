@extends('admin.layout.main')
@section('content')
    <form method="post" action="{{route('products.update',$product->id)}}">
        @csrf
        @method('put')
        <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Update Product</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{$product->name}}" id="name" placeholder="Name ...">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="price" value="{{$product->price}}" id="price" placeholder="Price ..">
            <label for="price">Price</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Description" name="description" id="description" style="height: 150px;">{{$product->description}}</textarea>
            <label for="description">Description</label>
        </div>
        <div class="form-floating mb-3">
            <img src="" style="width:50px; height:50px" />
            <label for="photo" class="form-label">Image:</label>                
            <input class="form-control" type="file" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary m-2">Add</button>
        <a href="{{route('products.index')}}" class="btn btn-dark m-2">Back</a>
    </div> 
    </form>    
@endsection