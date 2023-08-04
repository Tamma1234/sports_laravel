@extends('clients.layouts.detail')

@section('title', 'Trang Chủ')
<!-- Slidedetail  -->
@section('content')

    <div class="product-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <div class="nav">
                            <a class="active" data-bs-toggle="tab" href="#product-link-1-1">FEATURED</a>
                            <a data-bs-toggle="tab" href="#product-link-1-2">SALE</a>
                            <a data-bs-toggle="tab" href="#product-link-1-3">NEW ARRIVELS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-link-1-1" >
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/1.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/2.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/3.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/4.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-1-2" >
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/6.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/7.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/8.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/9.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-1-3" >
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/10.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/11.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/12.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/13.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->

    <!-- SERVICE AREA START -->
    <div class="service-area bg-white-2 service-area-3 pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-section-title clearfix">
                        <div class="service-title-icon">
                            <img src="{{ asset('assets/client/images/icons/icon-logo-2.png') }}')}}" alt="Images of N icon">
                        </div>
                        <div class="service-title-info">
                            <h2>WELCOME TO <strong class="color-theme">Nikado</strong> STORE</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper text-center">
                        <div class="service-icon color-white">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">FREE SHIPPING</h4>
                            <p>Free shipping on all orders over $100</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper text-center">
                        <div class="service-icon color-white">
                            <i class="fa fa-diamond"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">MONEY BACK</h4>
                            <p>100% money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper text-center">
                        <div class="service-icon color-white">
                            <i class="fa fa-life-bouy"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">ONLINE SUPPORT</h4>
                            <p>Service support fast 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE AREA END -->

    <!-- PRODUCT DEAL START -->
    <div class="product-deal-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="title-1">
                        <h2>DEAL OF THE DAYS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="deal-carousel-active owl-carousel arrow-style-1">
                        <!-- single-deal-wrapper-2 -->
                        <div class="single-deal-wrapper-2">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deal-counter">
                                        <div data-countdown="2023/11/12"></div>
                                    </div>
                                    <!-- deal-img -->
                                    <div class="deal-img">
                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/1.jpg') }}" alt="Image of Product"></a>
                                        <div class="quick-view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <!-- deal-info -->
                                    <div class="deal-info">
                                        <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</P>
                                        <div class="deal-price">
                                            <span>£145.00</span><del>£150.00</del>
                                        </div>
                                        <div class="select-option">
                                            <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-deal-wrapper-2 -->
                        <div class="single-deal-wrapper-2">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deal-counter">
                                        <div data-countdown="2023/11/12"></div>
                                    </div>
                                    <!-- deal-img -->
                                    <div class="deal-img">
                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/2.jpg') }}" alt="Image of Product"></a>
                                        <div class="quick-view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <!-- deal-info -->
                                    <div class="deal-info">
                                        <h4><a href="single-product.html">Handbag lobortis2</a></h4>
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</P>
                                        <div class="deal-price">
                                            <span>£145.00</span><del>£150.00</del>
                                        </div>
                                        <div class="select-option">
                                            <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- - -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEAL OF THE DAYS AREA END -->

    <!-- BANNER AREA START -->
    <div class="banner-area banner-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-item banner-1">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/1.jpg') }}" alt="Image of Banner"></a>
                        <div class="banner-info">
                            <h3>OMNIUM TRAINER</h3>
                            <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. NAM VOLUTPAT URNA EGET MI AUCTOR ALIQUET. SED NON MAXIMUS ARCU</p>
                            <a class="more-info" href="shop.html">MORE INFO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-item">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/2.jpg') }}" alt="Image of Banner"></a>
                    </div>
                    <div class="banner-item">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/3.jpg') }}" alt="Image of Banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- PRODUCT AREA 2 START -->
    <div class="product-area product-area-2 pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <div class="nav">
                            <a class="active" data-bs-toggle="tab" href="#product-link-2-1">WOMEN</a>
                            <a data-bs-toggle="tab" href="#product-link-2-2">MEN</a>
                            <a data-bs-toggle="tab" href="#product-link-2-3">SPORT</a>
                            <a data-bs-toggle="tab" href="#product-link-2-4">ACCESSORIES</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-link-2-1" >
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/1.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/1.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/2.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/2.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/3.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/3.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/4.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/4.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-2" >
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/6.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/6.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/7.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/7.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/8.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/8.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/9.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/9.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-3" >
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/10.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/10.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/11.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/11.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/12.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/12.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/13.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/13.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-4" >
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/10.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/10.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/11.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/11.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/12.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/12.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/13.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/13.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{ asset('assets/client/images/product/14.jpg') }}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA 2 END -->

    <!-- BANNER AREA 3 START -->
    <div class="banner-area-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- banner-item-3 -->
                    <div class="banner-item-3 banner-hover">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/7.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- banner-item-3 -->
                    <div class="banner-item-3 banner-hover">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/8.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- banner-item-3 -->
                    <div class="banner-item-3 banner-hover">
                        <a href="shop.html"><img src="{{ asset('assets/client/images/banner/9.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA 3 END -->

    <!-- PRODUCT BLOG AREA START -->
    <div class="product-blog-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- PRODUCT AREA 3 START -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-tab-menu">
                                <div class="nav">
                                    <a class="active" data-bs-toggle="tab" href="#product-link-3-1">RANDOM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="product-link-3-1" >
                                    <div class="row">
                                        <div class="product-carousel-active-4 owl-carousel arrow-style-1">
                                            <div class="col-lg-12">
                                                <!-- single-product-wrapper -->
                                                <div class="single-product-wrapper">
                                                    <div class="product-img">
                                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/1.jpg') }}" alt="Image of Product"></a>
                                                        <div class="product-hover">
                                                            <div class="quick-view">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                            </div>
                                                            <div class="product-action clearfix">
                                                                <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product-info -->
                                                    <div class="product-info">
                                                        <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>£145.00</span><del>£150.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrapper -->
                                                <div class="single-product-wrapper">
                                                    <div class="product-img">
                                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/2.jpg') }}" alt="Image of Product"></a>
                                                        <div class="product-hover">
                                                            <div class="quick-view">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                            </div>
                                                            <div class="product-action clearfix">
                                                                <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product-info -->
                                                    <div class="product-info">
                                                        <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>£145.00</span><del>£150.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrapper -->
                                                <div class="single-product-wrapper">
                                                    <div class="product-img">
                                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/3.jpg') }}" alt="Image of Product"></a>
                                                        <div class="product-hover">
                                                            <div class="quick-view">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                            </div>
                                                            <div class="product-action clearfix">
                                                                <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product-info -->
                                                    <div class="product-info">
                                                        <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>£145.00</span><del>£150.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrapper -->
                                                <div class="single-product-wrapper">
                                                    <div class="product-img">
                                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/4.jpg') }}" alt="Image of Product"></a>
                                                        <div class="product-hover">
                                                            <div class="quick-view">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                            </div>
                                                            <div class="product-action clearfix">
                                                                <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product-info -->
                                                    <div class="product-info">
                                                        <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>£145.00</span><del>£150.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrapper -->
                                                <div class="single-product-wrapper">
                                                    <div class="product-img">
                                                        <a href="single-product.html"><img src="{{ asset('assets/client/images/product/5.jpg') }}" alt="Image of Product"></a>
                                                        <div class="product-hover">
                                                            <div class="quick-view">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                            </div>
                                                            <div class="product-action clearfix">
                                                                <a href="cart.html" data-bs-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product-info -->
                                                    <div class="product-info">
                                                        <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                        <div class="product-rattings">
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star-half-o"></i></span>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>£145.00</span><del>£150.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT AREA 3 END -->
                </div>
                <div class="col-lg-6">
                    <!-- BLOG AREA START -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-1">
                                <h2>BLOG POSTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="blog-carousel-active-2 owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-blog-wrapper -->
                                        <div class="single-blog-wrapper">
                                            <div class="blog-img">
                                                <a href="single-blog.html"><img src="{{ asset('assets/client/images/blog/1.jpg') }}" alt="Nikado"></a>
                                            </div>
                                            <div class="blog-content clearfix">
                                                <div class="blog-date-pin">
                                                    <span>10</span>
                                                    <span class="month">Mar</span>
                                                </div>
                                                <div class="blog-info">
                                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-blog-wrapper -->
                                        <div class="single-blog-wrapper">
                                            <div class="blog-img">
                                                <a href="single-blog.html"><img src="{{ asset('assets/client/images/blog/2.jpg') }}" alt="Nikado"></a>
                                            </div>
                                            <div class="blog-content clearfix">
                                                <div class="blog-date-pin">
                                                    <span>10</span>
                                                    <span class="month">Mar</span>
                                                </div>
                                                <div class="blog-info">
                                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-blog-wrapper -->
                                        <div class="single-blog-wrapper">
                                            <div class="blog-img">
                                                <a href="single-blog.html"><img src="{{ asset('assets/client/images/blog/3.jpg') }}" alt="Nikado"></a>
                                            </div>
                                            <div class="blog-content clearfix">
                                                <div class="blog-date-pin">
                                                    <span>10</span>
                                                    <span class="month">Mar</span>
                                                </div>
                                                <div class="blog-info">
                                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-blog-wrapper -->
                                        <div class="single-blog-wrapper">
                                            <div class="blog-img">
                                                <a href="single-blog.html"><img src="{{ asset('assets/client/images/blog/3.jpg') }}" alt="Nikado"></a>
                                            </div>
                                            <div class="blog-content clearfix">
                                                <div class="blog-date-pin">
                                                    <span>10</span>
                                                    <span class="month">Mar</span>
                                                </div>
                                                <div class="blog-info">
                                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BLOG AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT BLOG AREA END -->

    <!-- BRAND AREA START -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-1">
                        <h2>BRAND LOGO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-carousel-active owl-carousel arrow-style-1">
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/1.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/2.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/3.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/4.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/5.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/1.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="{{ asset('assets/client/images/brand/2.png') }}" alt="Brand Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END -->

    <!-- BANNER CALL TO ACTION START -->
    <div class="banner-call-to-action-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="{{ asset('assets/client/images/icons/arrow-left-2.png') }}" alt="Arrow Image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="{{ asset('assets/client/images/banner/4.png') }}" alt="Image of Banner">
                    </div>
                </div>
                <div class="col-lg-2">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="{{ asset('assets/client/images/icons/arrow-right-2.png') }}" alt="Arrow Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Messenger Plugin chat Code -->
<!-- Messenger Plugin chat Code -->

@endsection
