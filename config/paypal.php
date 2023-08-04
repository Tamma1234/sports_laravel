<?php
return [
	// Client ID của app mà bạn đã đăng ký trên PayPal Dev
    'client_id' => 'AUCw5EWY0LKbw9YkC-VYTFHb7eaOEpWk7om8f6rVnHRc06YMuLqx5tGhoex0RYXhbx2I5LRDb8KIw5p9',
    // Secret của app
    'secret' => 'EGzRJK4rImY-piz0eIfemycWBGHAAdiYDzmz3yUUpUEksWNrttFw9TWlEr-OxCRWSYiGZkbGDK7HjAj0',
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
