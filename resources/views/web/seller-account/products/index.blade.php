@extends('web.layout.main')
@section('content')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h3 class="mb-4 center">
                    All Products   
                </h3>
                <span>
                    <a href="/seller/product">Add New Product</a>
                </span>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Amount</th>
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
                            <td>{{$product->cost}}</td>
                            <td>{{$product->amount}}</td>
                            <td>
                                <a class="btn btn-info m-2"  href="/seller/product/{{$product->id}}">Show</a>
                            </td>
                            
                            <td>
                                <a class="btn btn-secondary m-2" href="/seller/product/{{$product->id}}/edit">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="/seller/product/{{$product->id}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
