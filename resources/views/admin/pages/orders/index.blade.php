@extends('admin.layout.main')
@section('content')


    <h3 class="mb-4 center">
        All Orders  
    </h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Buyer</th>
                <th scope="col">State</th>
                <th scope="col">Details</th>
                <th scope="col">Send</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order) 
            <tr>
                <th scope="row">{{$order->id}}</th>
                @if($order->buyer != null)
                    <td>{{$order->buyer->name}} </td> 
                @elseif($order->seller != null)
                    <td> {{$order->seller->name}} </td> 
                @elseif($order->admin != null)
                    <td> {{$order->admin->name }}</td>
                @endif
                <td>{{$order->state}}</td>
                <td>
                    <a class="btn btn-info m-2"  href="/admin/show/order/{{$order->id}}">Show</a>
                </td>
                <td>
                    @if($order->state == 'confirmed')
                        <a class="btn btn-dark m-2"  href="/admin/send/order/{{$order->id}}">Send</a>
                    @else 
                        sent
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection