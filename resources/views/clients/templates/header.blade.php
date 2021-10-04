<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <!-- Default Welcome Message -->
                    </div>
                    <!-- top links -->
                    <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12">
                        <ul class="links">
                            <li class="hidden-xs"><a title="Help Center" href="#"><span>Hỗ trợ</span></a></li>
                            <li><a title="Store Locator" href="{{route('list-order')}}"><span>Kiểm tra đơn hàng</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header inner -->
        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12 jtv-logo-block">

                        <!-- Header Logo -->
                        <div class="logo">
                            <a title="e-commerce" href="{{ route('home') }}"><img alt="ShopMart" title="ShopMart"
                                    src="{{ asset('assets/admin/images/logo.png') }}"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search">

                        <!-- Search -->

                        <div class="top-search">
                            <div id="search">
                                <form method="POST" action="{{route('search.product')}}">
                                    @csrf
                                    <div class="input-group">
                                        
                                        <input type="text" name="keyword_submit" class="form-control" placeholder="Tìm kiếm sản phẩm"
                                            name="search">
                                        <button class="btn-search" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- End Search -->

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 top-cart">

                        <!-- top cart -->
                        <div class="top-cart-contain">
                            <div class="mini-cart">
                                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                    <a href="#">
                                        <div class="cart-icon"><i class="icon-basket-loaded icons"></i>
                                            @if (Session::has('cart') != null)
                                                {{-- {{dd(Session::has('cart'))}} --}}
                                                <span class="cart-total"
                                                    id="totalquanti-cart-show">{{ Session::get('cart')->totalQuantity }}</span>
                                            @else
                                                <span class="cart-total" id="totalquanti-cart-show">0</span>
                                            @endif
                                        </div>
                                        <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Giỏ
                                                hàng</span> </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="top-cart-content">
                                        <div class="block-subtitle hidden">Recently added items</div>
                                        <div id="change-cart">
                                            @if (Session::has('cart') != null)
                                            <ul id="cart-sidebar" class="mini-products-list">
                                            
                                                    @foreach (Session::get('cart')->products as $item)
                                                        <li class="item odd">
                                                            <a href="{{route('detail',['id'=>$item['productInfo']->id])}}" title="Product title here"
                                                                class="product-image"><img
                                                                    src="{{ asset("storage/".$item['productInfo']->image_url) }}"
                                                                    alt="html Template" width="65"></a>
                                                            <div class="product-details">
                                                                <a href="javascript:" title="Remove This Item"
                                                                    class="remove-cart">
                                                                    <i class="pe-7s-trash"
                                                                        data-id="{{ $item['productInfo']->id }}"></i>
                                                                </a>
                                                                <p class="product-name"><a
                                                                        href="{{route('detail',['id'=>$item['productInfo']->id])}}">{{ $item['productInfo']->title }}</a>
                                                                </p>
                                                                <strong>{{ $item['quantity'] }}</strong> x <span
                                                                    class="price">{{ $item['productInfo']->price }}</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                             
                                            </ul>
                                                <div class="top-subtotal">Tổng tiền: <span
                                                        class="price">{{ number_format(Session::get('cart')->totalPrice) }}</span>
                                                </div>
                                            @else
                                                <ul id="cart-sidebar" class="mini-products-list">
                                                    <li class="item odd text-center">
                                                   <span class="text-center">Không có sản phẩm nào !</span> 
                                                    </li>
                                                </ul>
                                                <div class="top-subtotal">Tổng tiền: <span
                                                        class="price">0</span>
                                                    <input type="hidden" id="totalquanti-cart-value" value="0">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="actions">
                                            <button class="btn-checkout" type="button"
                                                onClick="location.href='{{ route('checkout-list') }}'"><i
                                                    class="fa fa-check"></i><span>Thanh toán</span></button>
                                            <button class="view-cart" type="button"
                                                onClick="location.href='{{ route('list-cart') }}'"><i
                                                    class="fa fa-shopping-cart"></i><span>Giỏ hàng</span></button>
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
</header>
<!-- end header -->
<nav>
    <div class="container">
        <div class="row">
            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
                <span class="mm-label">Tất cả danh mục</span>
            </div>
            <div class="col-md-3 col-sm-3 mega-container hidden-xs">
                <div class="navleft-container">
                    <div class="mega-menu-title">
                        <h3><span>Tất cả danh mục</span></h3>
                    </div>

                    <!-- Shop by category -->
                    <div class="mega-menu-category">
                        <ul class="nav">
                            @foreach ($category as $item)
                                <li><a href="{{ route('category', ['id' => $item->id]) }}">{{ $item->name }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 jtv-megamenu">
                <div class="mtmegamenu">
                    <ul class="hidden-xs">
                        @foreach ($category as $cate)
                            <li class="mt-root demo_custom_link_cms">
                                <div class="mt-root-item">
                                    <a href="{{ route('category', ['id' => $cate->id]) }}">
                                        <div class="title title_font"><span
                                                class="title-text">{{ $cate->name }}</span></div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                        <li class="last-item"><a href="{{ route('category', ['id' => $cate->id]) }}"
                                title="Liên hệ">Liên Hệ</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
