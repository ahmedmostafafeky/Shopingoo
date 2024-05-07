


@extends('web.layout.main')
@section('content')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h3 class="mb-4 center">
                    All Orders   
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-4">Item</th>
                            <th scope="col-4">Amount</th>
                            <th scope="col-4">Order Is</th>
                            <th scope="col-4">Order Statue</td>
                            <th scope="col-4">Show!</td>
                            <th scope="col-4">send!</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item) 
                            
                            @foreach($item as $product)
                            <tr>
                                <th scope="row">{{$product->product->name}}</th>
                                <th scope="row">{{$product->product->amount}}</th>
                                <th scope="row">{{$product->order_id}}</th>
                                <th scope="row">{{$product->state}}</th>

                                <td>
                                    <a class="btn btn-info m-2"  href="">Show Product</a>
                                </td>


                                @if($product->state == 'confirmed')
                                    <td>
                                        <a class="btn btn-info m-2"  href="/seller/orders/send/{{$product->id}}">Send</a>
                                    </td>
                                @else
                                    <td>
                                        sent
                                    </td>
                                @endif
                            @endforeach
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
