@extends('admin.layout.main')
@section('content')
    
    <h3 class="mb-4 center">
        All Products   
    </h3>
    <span>
        <a href="{{route('products.create')}}">Add New Product</a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Owner</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product) 
            <tr>
                <th scope="row">{{$product->name}}</th>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    @php
                        if($product->admin != null) {
                            echo 'Admin: '.$product->admin->name;
                        } else if ($product->seller != null) {
                            echo 'Seller: '.$product->seller->name;
                        }
                    @endphp
                </td>
                <td>
                    <a class="btn btn-info m-2"  href="{{route('products.show', $product->id)}}">Show</a>
                </td>
                @if($product->admin_id == $user)
                <td>
                    <a class="btn btn-secondary m-2" href="{{route('products.edit', $product->id)}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('products.destroy', $product->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                    </form>
                </td>
                @else
                
                <td>you dont have permision</td>
                <td>you dont have permision</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
                        
@endsection