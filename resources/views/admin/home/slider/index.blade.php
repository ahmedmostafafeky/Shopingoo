@extends('admin.layout.main')
@section('content')
 
    <h3 class="mb-4 center">
        All Slides
        
    </h3>
    <span>
        <a href="{{route('slider.create')}}">add new Slide</a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">call to action</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide) 
            <tr>
                <th scope="row">{{$slide->id}}</th>
                <td>{{$slide->title}}</td>
                <td>{{$slide->cto}}</td>
                <td>
                    <a class="btn btn-info m-2"  href="{{route('slider.show', $slide->id)}}">Show</a>
                </td>
                <td>
                    <a class="btn btn-secondary m-2" href="{{route('slider.edit', $slide->id)}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('slider.destroy', $slide->id)}}">
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