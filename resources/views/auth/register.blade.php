@extends('web.layout.main')
@section('content')
    <div class="page-content">
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-body p-4">
                                <h4 class="mb-0 fw-bold text-center">Registration</h4>
                                <hr>
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
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
                                            <input type="text" class="form-control rounded-0" name="name" id="name" value="{{old('name')}}" required autofocus>
                                        </div>
                                        <div class="col-12">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control rounded-0" name="username" id="username" value="{{old('username')}}" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control rounded-0"  name="email" value="{{old('email')}}" required />
                                        </div>
                                        <div class="col-12">
                                            <label for="role" class="form-label">User Type</label>
                                            <select class="form-select rounded-0" name="type" id="role" required>
                                                <option value="buyer">Buyer</option>
                                                <option value="seller">Seller</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control rounded-0" id="password" name="password" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="photo" class="form-label">Image:</label>                
                                            <input class="form-control" type="file" id="photo" name="photo" vlaue="{{old('photo')}}" required>
                                        </div>
                                        <div class="col-12">
                                            <hr class="my-0">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Sign Up</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="mb-0 rounded-0 w-100">Already have an account? <a href="{{route('login')}}" class="text-danger">Sign In</a></p>
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

