@extends('web.layout.main')
@section('content')

<!--start page content-->
<div class="page-content">


    <!--start breadcrumb-->
    <div class="py-4 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->


    <!--start product details-->
    <section class="section-padding">
        <div class="container">

            <div class="row g-4">
                <div class="col-12 col-xl-8">
                    <div class="d-flex flex-column gap-4">
                        <div class="card rounded-0 border">
                            <img src="/assets/images/blog/01.webp" class="card-img-top rounded-0 mb-3" alt="...">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-4">
                                    <div class="posted-by">
                                        <p class="mb-0"><i class="bi bi-person me-2"></i>Virendra</p>
                                    </div>
                                    <div class="posted-by">
                                        <p class="mb-0"><i class="bi bi-chat me-2"></i>18 Comments</p>
                                    </div>
                                    <div class="posted-date">
                                        <p class="mb-0"><i class="bi bi-calendar me-2"></i>15 Aug, 2022</p>
                                    </div>
                                </div>
                                <h4 class="card-title fw-bold mt-3">Blog title here</h4>
                                <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <br>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>Nullam non felis odio. Praesent aliquam magna est, nec volutpat quam aliquet non. Cras ut lobortis massa, a fringilla dolor. Quisque ornare est at felis consectetur mollis. Aliquam vitae metus et enim posuere ornare. Praesent sapien erat, pellentesque quis sollicitudin eget, imperdiet bibendum magna. Aenean sit amet odio est.</p>

                                <div class="d-flex align-items-center gap-3 py-3 border-top border-bottom">
                                    <div class="">
                                        <h5 class="mb-0 fw-bold">Share This Post</h5>
                                    </div>
                                    <div class="footer-widget-9">
                                        <div class="social-link d-flex flex-wrap align-items-center gap-2">
                                            <a href="javascript:;"><i class="bi bi-facebook"></i></a>
                                            <a href="javascript:;"><i class="bi bi-twitter"></i></a>
                                            <a href="javascript:;"><i class="bi bi-linkedin"></i></a>
                                            <a href="javascript:;"><i class="bi bi-youtube"></i></a>
                                            <a href="javascript:;"><i class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="author d-flex align-items-start gap-3 my-3">
                                    <img src="/assets/images/avatars/01.jpg" class="" alt="" width="80">
                                    <div class="">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <p class="mb-0">Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="reply-form p-4 border">
                                    <h5 class="mb-0 fw-bold">Leave a Reply</h5>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Comment</label>
                                            <textarea class="form-control rounded-0" rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-0" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control rounded-0">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control rounded-0">
                                        </div>
                                        <div class="mb-0">
                                            <button type="button" class="btn btn-dark btn-ecomm">Post Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="blog-left-sidebar border p-4">
                        <form>
                            <div class="position-relative mb-4">
                                <input type="text" class="form-control form-control-lg ps-5 rounded-0" placeholder="Search Product...">
                                <span class="position-absolute top-50 product-show translate-middle-y"><i class="bi bi-search ms-3"></i></span>
                            </div>
                            <div class="blog-categories mb-4">
                                <h5 class="mb-3 fw-bold">Blog Categories</h5>
                                <div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item bg-transparent"><i class="bi bi-chevron-right me-1"></i> Fashion</a>
                                    <a href="javascript:;" class="list-group-item bg-transparent"><i class="bi bi-chevron-right me-1"></i> Electronis</a>
                                    <a href="javascript:;" class="list-group-item bg-transparent"><i class="bi bi-chevron-right me-1"></i> Accessories</a>
                                    <a href="javascript:;" class="list-group-item bg-transparent"><i class="bi bi-chevron-right me-1"></i> Kitchen &amp; Table</a>
                                    <a href="javascript:;" class="list-group-item bg-transparent"><i class="bi bi-chevron-right me-1"></i> Furniture</a>
                                </div>
                            </div>
                            <div class="blog-categories recent-post mb-4">
                                <h5 class="mb-4 fw-bold">Recent Posts</h5>
                                <div class="d-flex align-items-start">
                                    <img src="/assets/images/blog/01.webp" width="100" alt="">
                                    <div class="ms-3"> <a href="javascript:;" class="fs-6 fw-bold text-content">Post title here</a>
                                        <p class="mb-0">March 15, 2021</p>
                                    </div>
                                </div>
                                <div class="my-3 border-bottom"></div>
                                <div class="d-flex align-items-start">
                                    <img src="/assets/images/blog/02.webp" width="100" alt="">
                                    <div class="ms-3"> <a href="javascript:;" class="fs-6 fw-bold text-content">Post title here</a>
                                        <p class="mb-0">March 15, 2021</p>
                                    </div>
                                </div>
                                <div class="my-3 border-bottom"></div>
                                <div class="d-flex align-items-start">
                                    <img src="/assets/images/blog/03.webp" width="100" alt="">
                                    <div class="ms-3"> <a href="javascript:;" class="fs-6 fw-bold text-content">Post title here</a>
                                        <p class="mb-0">March 15, 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-categories">
                                <h5 class="mb-4 fw-bold">Popular Tags</h5>
                                <div class="tags-box d-flex flex-wrap gap-3">
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Cloths</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Electronis</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Furniture</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Laptops</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Men Wear</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Shoes</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Topwear</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Formal Shirts</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Headphones</a>
                                    </div>
                                    <div>
                                        <a href="javascript:;" class="btn btn-outline-dark rounded-0 btn-ecomm">Bottom Wear</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end row-->

        </div>
    </section>
    <!--start product details-->


</div>
<!--end page content-->
@endsection
