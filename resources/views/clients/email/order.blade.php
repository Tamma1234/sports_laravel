
<h3>Thông tin đơn hàng </h3>
<div>
    <div class=""><div class="aHl"></div><div id=":g3" tabindex="-1"></div><div id=":fs" class="ii gt">
        <div id=":fr" class="a3s aiL msg-8525905254478487520"><u></u>
        <div>
            <h3>
                Xin chào {{$name}}
            </h3>
            <p>Chúng tôi vừa nhận được đơn hàng của bạn. Bạn vui lòng kiểm tra lại đơn hàng và xác minh để chúng tôi có thể sớm chuyển hàng đến bạn!</p>
            <p>Thông tin đơn hàng:</p>
            
            <div class="m_-8525905254478487520table-responsive">
                <table border="1" style="width:50%;margin-left:200px">
                    <tbody>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <td>{{$order->id}}</td>
                        </tr>
                        <tr>
                            <th>Thời gian đặt</th>
                            <td><span>{{$order->date_order}}</span></td>
                        </tr>
                        <tr>
                            <th>Thuế</th>
                            <td>
                                <span>0Đ</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Tổng tiền</th>
                            <td><span>{{number_format($order->total)}}</span></td>
                        </tr>
                        
                    </tbody>
                </table>
            
            </div>
                <p><strong>Thông tin giao hàng</strong></p>
            <div class="m_-8525905254478487520table-responsive">
                
                <table border="1" style="width:50%;margin-left:200px">
                    <tbody>
                        <tr>
                            <th>Tên khách hàng</th>
                            <td>{{$name}}</td>
                        </tr>
                        <tr>
                            <th>Số diện thoại</th>
                            <td>{{$order->phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><a href="mailto:thientamjvb@gmail.com" target="_blank">{{$order->email}}</a></td>
                        </tr>
                        <tr>
                            <th>Địa chỉ giao hàng</th>
                            <td>{{$order->address}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
                
            <p>Chi tiết</p>
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Thuộc tính</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>
                                <a href="">
                                    <img src="{{ asset($item['productInfo']->image_url) }}" width="100px">
                                </a>
                            </td>
                            <td>
                                {{$item['productInfo']->title}}
                            </td>
                            <td>
                            <span>Size: <strong>{{ $item['size'] }}</strong>
                         
                            </span>
                                                    </td>
                            <td>
                                {{ $item['quantity'] }}
                            </td>
                            <td><strong>{{number_format($item['price'])}}</strong></td>
                            
                        </tr>
                        @endforeach                         
                    </tbody>
                    
                </table>
            </div>
        
        
            <br>
            <br>
            <br>
            <p class="m_-8525905254478487520confirm-block" style="text-align:center">
                <a href="{{route('list-order')}}" style="background: red;padding:10px;text-decoration:none;color:white" target="_blank">Xác thực</a>
            </p><div class="yj6qo"></div><div class="adL">
        </div></div><div class="adL">
        
        </div></div></div><div id=":g7" class="ii gt" style="display:none"><div id=":g8" class="a3s aiL "></div></div><div class="hi"></div></div>
    
</div>
