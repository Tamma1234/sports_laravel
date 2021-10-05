<?php

namespace App\Service;

use Illuminate\Support\Facades\Mail;

class SendMailService
{
    public function sendPaymentMail($name, $email, $bill, $cart)
    {
        Mail::send('clients.email.order', [
            'name' => $name,
            'order' => $bill,
            'items' => $cart->products,
        ], function ($mail) use ($email, $name) {
            $mail->from('thientamjvb@gmail.com');
            $mail->to($email, $name);
            $mail->subject('Gửi email đặt hàng');
        });
    }
}