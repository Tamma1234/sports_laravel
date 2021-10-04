<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/admin/js/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/admin/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.vmap.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/admin/js/jquery.knob.min.js') }}"></script>
<!--Alert js -->
<script src="{{ asset('assets/admin/js/ac-alert.js') }}"></script>
<script src="{{ asset('assets/admin/js/sweetalert.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/admin/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/admin/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/admin/js/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/admin/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/admin/js/jsgrid.min.js') }}"></script>

<script type='text/javascript'>
    // Thay đổi trạng thái đơn hàng
    function activeAll(id) {
        // Dùng ajax để lấy data qua 
        var active = $('#activeAll').val();
        console.log(active);
        var data = {
            active: active,
            id: id,
        };
        $.ajax({
            url: "{{ route('bill-edit') }}",
            method: 'POST',
            data: data,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                location.reload();
            }
        });
    }

    // Thông báo khi click xóa 
    @if (session('msg'))
        swal("Thông báo", "{{ session('msg') }}!", "info");
    @endif
    // Hàm thông báo khi click buton xóa
    function confirmDel(redirectUrl) {
        // let redirectUrl = $(this).attr('id');
        console.log(redirectUrl);
        swal({
                title: "Bạn có muốn xóa không?",
                // text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "success",
                buttons: true,
                dangerMode: true,

            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = redirectUrl;
                } else {
                    swal("Hủy bỏ xóa!", {
                        icon: "error",
                    });
                }
            });
    }
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    var notificationsWrapper = $('.dropdown-notifications');
    var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount = parseInt(notificationsCountElem.data('count'));
    var notifications = notificationsWrapper.find('ul.dropdown-item');

    if (notificationsCount <= 0) {
        notificationsWrapper.show();
    }

    //Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
    var pusher = new Pusher('5a2c635644d28e3c32b6', {
        encrypted: true,
        cluster: "ap1"
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('my-channel');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\HelloPusherEvent', function(data) {
        console.log(data);
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
        <i class="fas fa-envelope mr-2">
        </i>`+data.message+`
         <span class="float-right text-muted text-sm">`+data.date+`</span> 
        `;
        notifications.html(newNotificationHtml + existingNotifications);
        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>
