<?php
return [
	// Client ID của app mà bạn đã đăng ký trên PayPal Dev
    'client_id' => 'ATwoPrC5E0gNhJPyxrsKrJuwzFz-c57C7dvVFrVldHRa9iRjJ9IdVTeZIRCeY68gPbdxH2kQEHtIB9JH',
    // Secret của app
    'secret' => 'EHu0zUAhO7SuAcP3Zc9aw7k7msnEMzEK408Y1zE_YyKbEYn6ShFBndf8s2GFWVEFAV_9NJcUXFc7tR0P',
    'settings' => [
    	// PayPal mode, sanbox hoặc live
        'mode' => env('PAYPAL_MODE'),
        // Thời gian của một kết nối (tính bằng giây)
        'http.ConnectionTimeOut' => 30,
        // Có ghi log khi xảy ra lỗi
        'log.logEnabled' => true,
        // Đường dẫn đền file sẽ ghi log
        'log.FileName' => storage_path() . '/logs/paypal.log',
        // Kiểu log
        'log.LogLevel' => 'FINE'
    ],
];