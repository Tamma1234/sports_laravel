@extends('client.layout.detail')

@section('title', 'Danh sách giỏ hàng')
<!-- Slidedetail  -->

@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order">
                        <div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>


                        <div class="order-detail-content">
                            <div class="table-responsive" id="list-carts">
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
                                                    <td class="cart_product"><a href="#"><img
                                                                src="{{ asset($item['productInfo']->image_url) }}"
                                                                alt="Product"></a></td>
                                                    <td class="cart_description">
                                                        <p class="product-name"><a
                                                                href="#">{{ $item['productInfo']->title }} </a></p>
                                                        <small><a href="#">Color : Red</a></small>
                                                        <small><a href="#">Size : M</a></small>
                                                    </td>
                                                    <td class="availability in-stock">
                                                        @if ($item['productInfo']->is_active == 1)
                                                        <span class="label">Còn hàng</span>
                                                        @else
                                                        <span class="label">Hết hàng</span>
                                                        @endif
                                                    </td>
                                                    <td class="price">
                                                        <span>{{ number_format($item['productInfo']->price) }},Đ</span></td>
                                                    <td class="qty"><input class="form-control input-sm"
                                                            type="text" value="{{ $item['quantity'] }}"></td>
                                                    <td class="price">
                                                        <span>{{ number_format($item['price']) }}Đ</span></td>
                                                    <td class="action"><a onclick="deleteListCart({{$item['productInfo']->id}})" href="javascript:"><i
                                                                class="icon-close"></i></a></td>
                                                </tr>
                                            @endforeach
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" rowspan="2"></td>
                                            <td colspan="3">Tổng sản phẩm</td>
                                            <td colspan="2">{{ Session::get('cart')->totalQuantity}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><strong>Tổng tiền</strong></td>
                                            <td colspan="2"><strong> {{number_format(Session::get('cart')->totalPrice)}}Đ </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                @endif
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left">
                                    </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="#"><i
                                        class="fa fa-check"></i> Proceed to checkout</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>

  function deleteListCart(id){
    $.ajax({
        url: 'delete-list-cart/' + id,
        type: 'GET',
      }).done(function(response){
        // console.log(response);
        renderListCart(response);
      
  });
  }

  function renderListCart(response){
    $('#list-carts').empty();
    $('#list-carts').html(response);
  }
</script>

@endsection
