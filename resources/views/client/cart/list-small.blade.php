<!-- Dùng session::has kiểm tra xem sản phẩm có tồn tại k -->
@if (Session::has('cart') != null)
    <ul id="cart-sidebar" class="mini-products-list">
        @foreach (Session::get('cart')->products as $item)
            <li class="item odd">
                <a href="shopping_cart.html" title="Product title here" class="product-image"><img
                        src="{{ asset($item['productInfo']->image_url) }}" alt="html Template" width="65"></a>
                <div class="product-details">
                    <a href="javascript:" title="Remove This Item" class="remove-cart">
                        <i class="pe-7s-trash" data-id="{{$item['productInfo']->id}}"></i>
                    </a>
                    <p class="product-name"><a href="shopping_cart.html">{{ $item['productInfo']->title }}</a> </p>
                    <strong>{{ $item['quantity'] }}</strong> x <span
                        class="price">{{number_format($item['productInfo']->price)}}Đ</span>
                </div>
            </li>
        @endforeach

    </ul>

    <div class="top-subtotal">Tổng tiền: <span class="price">{{ number_format(Session::get('cart')->totalPrice) }}</span>
        <input type="hidden" id="totalquanti-cart-value" value="{{Session::get('cart')->totalQuantity}}">
    </div>
@endif
