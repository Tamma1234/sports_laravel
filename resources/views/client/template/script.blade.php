<script type="text/javascript" src="{{ asset('assets/client/js/jquery.min.js') }}"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>

<!-- jquery.mobile-menu js -->
<script type="text/javascript" src="{{ asset('assets/client/js/mobile-menu.js') }}"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="{{ asset('assets/client/js/jquery-ui.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/client/js/revolution-slider.js') }}"></script>

<!-- main js -->
<script type="text/javascript" src="{{ asset('assets/client/js/countdown.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/client/js/main.js') }}"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
<!-- countdown js -->

<script type='text/javascript'>
   

    // Tạo hàn addCart để thêm sản phẩm vào giỏ hàng 
    function addCart(id) {
        // Dùng ajax để lấy data qua 
    //   console.log(id);
        var qty = $('#qty-'+id).val();
        var size = $('.size input[type=checkbox]:checked').val();
        var data = {qty : qty, size : size,id :id};

        $.ajax({
            url: "{{route('add-cart')}}/"+id,
            type: 'GET',
            data: data,
        }).done(function(response) {
            // console.log(response);
            renderCart(response);
            alertify.success('Đã thêm vào giỏ hàng');
        });
    }

    // Tạo click cho clas .remove-cart để xóa sản phẩm trong cart item
    $("#change-cart").on("click", ".remove-cart i", function() {
        // console.log($(this).data('id'));
     
        $.ajax({
            url: 'delete-cart/' + $(this).data('id'),
            type: 'GET',
        }).done(function(response) {
            // Gọi hàm renderCart trả về cart item con
            renderCart(response);
            alertify.success('Đã xóa sản phẩm thành công');
        });
    })

    // Hàm trả về kết quả data cart item con thông qua ajax
    function renderCart(response) {
        $('#change-cart').empty();
        $('#change-cart').html(response);
        $('#totalquanti-cart-show').html($('#totalquanti-cart-value').val());
    }

    /*Truyền sự kiện change vào input tăng số lượng khi thay đổi sẽ tăng tiền của sản phẩm đó và 
    Tăng tổng tiền và tổng số lượng của list giỏ hàng 
    */ 
    $("#list-carts").on("change", ".input-sm", function() {
        // console.log($(this).data('id'));
        var id = $(this).data('id');
        var qty = $(this).val();

        var data = {
            id: id,
            qty: qty
        };

        $.ajax({
            url: 'update-cart',
            type: 'GET',
            data: data,
            // dataType: 'json',
        }).done(function(response) {
            // console.log(response);
            $('#list-carts').empty();
            $('#list-carts').html(response);
        });
    })

    // Hám xóa item trong list giỏ hàng chính 
    // function deleteListCart(id) {
    //     $.ajax({
    //         url: 'delete-list-cart/' + id,
    //         type: 'GET',
    //     }).done(function(response) {
    //         // gọi vào hàm trả về data của giỏ hàng khi dùng ajax lấy data
    //         // console.log(response);
    //         renderListCart(response);
    //         alertify.success('Đã xóa sản phẩm thành công');

    //     });
    // }

    $("#list-carts").on("click", ".remove i", function() {
       
        $.ajax({
            url: 'delete-list-cart/' + $(this).data('id'),
            type: 'GET',
        }).done(function(response) {
            // Gọi hàm renderCart trả về cart item con
            renderListCart(response);
            alertify.success('Đã xóa sản phẩm thành công');
        });
    })

    // Hàm trả về data của giỏ hàng rồi chuyền vào liste-carts 
    function renderListCart(response) {
        $('#list-carts').empty();
        $('#list-carts').html(response);
        $('#totalquanti-cart-show').text($('#totalquanti-cart-value').val());
    }
</script>
