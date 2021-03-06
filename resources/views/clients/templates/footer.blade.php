
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <!-- Newsletter -->
                    <div class="col-md-6 col-sm-6">
                        <img src="{{asset('assets/client/images/banner-4.jpg')}}" alt="">
                    </div>
                    <!-- Customers Box -->
                    <div class="col-sm-6 col-xs-12 testimonials">
                        <img src="{{asset('assets/client/images/banner-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer-logo">
                            <a href="{{route('home')}}"><img src="{{ asset('assets/admin/images/logo.png') }}" alt="fotter logo"></a>
                        </div>
                        <p>Becksport chuyên giầy bóng đá sân cỏ nhân tạo, tự nhiên và sân futsal uy tín</p>
                    </div>
                    <div class="col-sm-6 col-md-2 col-xs-12 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Loại giầy<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
                            <div class="tabBlock" id="TabBlock-1">
                                <ul class="list-links list-unstyled">
                                    @foreach ($category as $item)
                                    <li><a href="{{ route('category', ['id' => $item->id]) }}">{{$item->name}}</a></li>
                            
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                            <div class="tabBlock" id="TabBlock-3">
                                <ul class="list-links list-unstyled">
                                    <li><a href="sitemap.html"> Sites Map </a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Trends</a></li>
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="contact_us.html">Contact Us</a></li>
                                    <li><a href="#">My Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
                            <div class="tabBlock" id="TabBlock-4">
                                <ul class="list-links list-unstyled">
                                    <li><a href="account_page.html">Account</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="shopping_cart.html">Shopping Cart</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Special</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 collapsed-block">
                        <div class="footer-links">
                            <h3 class="links-title">Working hours<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
                            <div class="tabBlock" id="TabBlock-5">
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                                <div class="footer-description"> <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                    <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                                    <b>Sunday:</b> Closed </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-coppyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2017 <a href="#"> ShopMart </a>. All Rights Reserved. </div>
                        <div class="col-sm-6 col-xs-12">
                            <ul class="footer-company-links">
                                <li> <a href="about_us.html">About ShopMart</a> </li>
                                <li> <a href="#">Careers</a> </li>
                                <li> <a href="#">Privacy Policy</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>