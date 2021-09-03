
 @if (Session::has('cart') != null)
<table class="table table-bordered cart_summary">
    <thead>
        <tr>
            <th class="cart_product">Sản phẩm</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th class="action"><i class="fa fa-trash-o"></i></th>
        </tr>
    </thead>
    <tbody>
       
            @foreach (Session::get('cart')->products as $item)
                <tr>
                    <td class="cart_product"><a href="#"><img src="{{ asset($item['productInfo']->image_url) }}"
                                alt="Product"></a></td>
                    <td class="cart_description">
                        <p class="product-name"><a href="#">{{ $item['productInfo']->title }} </a></p>
                        <small><a href="#">Color : Red</a></small>
                        <small><a href="#">Size : M</a></small>
                    </td>
                    <td class="availability in-stock"><span class="label">In stock</span></td>
                    <td class="price">
                        <span>{{ number_format($item['productInfo']->price) }}Đ</span></td>
                    <td class="qty"><input min="1" max="10" data-id="{{ $item['productInfo']->id }}" class="input-sm" type="number"
                            value="{{ $item['quantity'] }}"></td>
                    <td class="price"><span>{{ number_format($item['price']) }}Đ</span></td>
                    <td class="action">
                        <a class="remove"  href="javascript:">
                            <i class="icon-close" data-id="{{ $item['productInfo']->id }}"></i>
                          </a>
                    </td>
                </tr>
            @endforeach
       
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" rowspan="2"></td>
            <td colspan="3">Tổng sản phẩm</td>
            <td colspan="2">{{ Session::get('cart')->totalQuantity }} </td>
            <input type="hidden" id="totalquanti-cart-value" value="{{Session::get('cart')->totalQuantity}}">

        </tr>
        <tr>
            <td colspan="3"><strong>Tổng tiền</strong></td>
            <td colspan="2"><strong>{{ number_format(Session::get('cart')->totalPrice) }}Đ </strong></td>
        </tr>
    </tfoot>
</table>
@else
<table class="table table-bordered cart_summary">
    <thead>
        <tr>
            <th class="cart_product">Sản phẩm</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th class="action"><i class="fa fa-trash-o"></i></th>
        </tr>
    </thead>
    <tbody>
       

    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" rowspan="2"></td>
            <td colspan="3">Tổng sản phẩm</td>
            <td colspan="2">0 </td>
            <input type="hidden" id="totalquanti-cart-value" value="0">

        </tr>
        <tr>
            <td colspan="3"><strong>Tổng tiền</strong></td>
            <td colspan="2"><strong>0Đ </strong></td>
        </tr>
    </tfoot>
</table>
 @endif