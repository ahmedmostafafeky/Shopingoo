@extends('admin.layout.main')
@section('content')
    <h1>{{$category->name}}</h1>
    <h3>{{$category->slug}}</h3>
    <p>{{$category->description}}</p>
    <a href="{{route('categories.index')}}" class="btn btn-dark m-2">Back</a>
@endsection 