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
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            success: function(data) {
                location.reload();
            }
        });
    }

    @if(session('msg'))
    swal("Thông báo", "{{session('msg')}}!", "info");
    @endif
    // Hàm thông báo khi click buton xóa
    function confirmDel(redirectUrl) {
        // let redirectUrl = $(this).attr('id');
        console.log(redirectUrl);
        swal({
                title: "Bạn có muốn xóa không?",
                // text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
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