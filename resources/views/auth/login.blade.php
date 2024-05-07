
@extends('web.layout.main')
@section('content')
    <div  class="page-content">
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-body p-4">
                                <h4 class="mb-0 fw-bold text-center">User Login</h4>
                                <hr>
                                <form method="POST" action="{{ route('login') }}">
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
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control rounded-0"  name="email" value="{{old('email')}}" required autofocus />
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>            
                                            <input id="password" class="form-control rounded-0" type="password"  name="password" required />
                                        </div>
                                        <div class="col-12">
                                            <hr class="my-0">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Login</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="mb-0 rounded-0 w-100">Don't have an account? <a href="{{ route('register') }}" class="text-danger">Sign Up</a></p>
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