
@php
    use App\Models\Category;
    $categories = Category::all();
    $count = ($categories->count() / 2) ;
    $categories1 = $categories->slice(0,$count);
    $categories2 = $categories->slice($count);
    
@endphp


    <!--page loader-->
        <div class="loader-wrapper">
            <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    <!--end loader-->

    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
            <a class="navbar-brand d-none d-xl-inline" href="/home"><img src="/assets/images/logo.webp" class="logo-img" alt=""></a>
            <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar">
                <i class="bi bi-list"></i>
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <div class="offcanvas-logo">
                        <img src="/assets/images/logo.webp" class="logo-img" alt="">
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body primary-menu">
                    <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="/categories"
                                data-bs-toggle="dropdown">
                                Categories
                            </a>
                            <div class="dropdown-menu dropdown-large-menu">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <ul class="list-unstyled">
                                        @foreach($categories1 as $category)
                                            <li>
                                                <a  href="/categories/{{$category->slug}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-12 col-xl-6">
                                        <ul class="list-unstyled">
                                        @foreach($categories2 as $category)
                                            <li>
                                                <a  href="/categories/{{$category->slug}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/shop/cart">Shop Cart</a></li>
                                @if((Auth::guard('buyer')->check() || Auth::guard('seller')->check() || Auth::guard('admin')->check()))
                                <li><a class="dropdown-item" href="/shop/wish">Wishlist</a></li>
                                @endif
                                <li><a class="dropdown-item" href="/search">Search</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/blog">Blog Posts</a></li>
                                <li><a class="dropdown-item" href="/blog/post">Blog Read</a></li>
                            </ul>
                        </li>
                        <!-- only guest-->
                        @if(!(Auth::guard('buyer')->check() || Auth::guard('seller')->check() || Auth::guard('admin')->check()))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>                    
                        </li>
                        @endif
                        <!-- only admin-->
                        @if(Auth::guard('buyer')->check() || Auth::guard('seller')->check() || Auth::guard('admin')->check())
                        
                            @if(Auth::guard('admin')->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                    Admin
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/admin/dashboard">Admin Dashboard</a></li>
                                    <li><a class="dropdown-item" href="#">admin</a></li>
                                </ul>
                            </li>
                            @endif
                            @if(Auth::guard('admin')->check() || Auth::guard('seller')->check())
                                <!-- admin seller-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                        Seller
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/seller">Seller Dashboard</a></li>
                                        <li><a class="dropdown-item" href="/seller/products">Seller's Products</a></li>
                                        <li><a class="dropdown-item" href="/seller/product">Seller Add Product</a></li>
                                        <li><a class="dropdown-item" href="/seller/orders">Seller's Orders </a></li>
                                    </ul>
                                </li>
                            @endif
                                <!-- admin seller buyer-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/profile/myorders">My Orders</a></li>
                                        <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                                        <li><a class="dropdown-item" href="/profile/edit">Edit Profile</a></li>
                                    </ul>
                                </li>
                            
                                <li class="nav-item dropdown">
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button class="btn btn-outline-secondary m-2" type="submit">  Log Out  </button>
                                    </form>
                                </li>
                        @endif
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav secondary-menu flex-row">
                <li class="nav-item">
                    <a class="nav-link dark-mode-icon" href="javascript:;">
                        <div class="mode-icon">
                        <i class="bi bi-moon"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search"><i class="bi bi-search"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop/wish"><i class="bi bi-suit-heart"></i></a>
                </li>
                <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                    <a class="nav-link position-relative" href="javascript:;">
                        <i class="bi bi-basket2"></i>
                    </a>
                </li>
                
                @if(Auth::guard('buyer')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">{{Auth::guard('buyer')->user()->name}}</a>
                    </li>
                @elseif(Auth::guard('seller')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">{{Auth::guard('seller')->user()->name}}</a>
                    </li>
                @elseif(Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">{{Auth::guard('admin')->user()->name}}</a>
                    </li>
                @endif
                
            </ul>
        </nav>
    </header>
    <!--end top header-->
