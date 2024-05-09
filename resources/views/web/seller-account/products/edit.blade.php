@extends('web.layout.main')
@section('content')
<div class="page-content">
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-body p-4">
                            <h4 class="mb-0 fw-bold text-center">Add Product</h4>
                            <hr>
                            <form method="POST" action="/seller/product/{{$product['id']}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row g-4">
                                    @if(session('fail'))
                                        <div class="alert alert-danger">
                                            {{session('fail')}}
                                        </div>
                                    @endif
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control rounded-0" name="name" id="name" value="{{$product['name']}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control rounded-0" name="description" id="description" value="{{$product['description']}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="price" class="form-label">Price</label>
                                        <input id="price" type="text" class="form-control rounded-0"  name="price" value="{{$product['price']}}"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="cost" class="form-label">Cost</label>
                                        <input id="cost" type="text" class="form-control rounded-0"  name="cost" value="{{$product['cost']}}"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input id="amount" type="text" class="form-control rounded-0"  name="amount" value="{{$product['amount']}}"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="photo" class="form-label">Image:</label>                
                                        <input class="form-control" type="file" id="photo" name="photo">
                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
