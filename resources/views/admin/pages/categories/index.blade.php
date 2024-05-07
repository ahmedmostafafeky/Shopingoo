@extends('admin.layout.main')
@section('content')

    <h3 class="mb-4 center">
        All Categories
        
    </h3>
    <span>
        <a href="{{route('categories.create')}}">add new product</a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category) 
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a class="btn btn-info m-2"  href="{{route('categories.show', $category->id)}}">Show</a>
                </td>
                <td>
                    <a class="btn btn-secondary m-2" href="{{route('categories.edit', $category->id)}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('categories.destroy', $category->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
                        
@endsection