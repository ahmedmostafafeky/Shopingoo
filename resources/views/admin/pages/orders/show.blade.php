@extends('admin.layout.main')
@section('content')


    <h3 class="mb-4 center">
        Order: {{$items[0]->order_id}} Products
    </h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">price</th>
                <th scope="col">Amount</th>
                <th scope="col">seller</th>
                <th scope="col">Buyer</th>
                <th scope="col">state</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item) 
            <tr>
                <th scope="row">{{$item->product->name}}</th>
                <th scope="row">{{$item->price}}</th>
                <th scope="row">{{$item->amount}}</th>
                @if($item->product->seller != null)
                    <td>{{$item->product->seller->name}} </td> 
                @elseif($item->product->admin  != null)
                    <td> {{$item->product->admin->name}} </td> 
                @endif
                @if($item->order->buyer != null)
                    <td>{{$item->order->buyer->name}} </td> 
                @elseif($item->order->seller != null)
                    <td> {{$item->order->seller->name}} </td> 
                @elseif($item->order->admin != null)
                    <td> {{$item->order->admin->name }}</td>
                @endif
                <td>{{$item->state}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection