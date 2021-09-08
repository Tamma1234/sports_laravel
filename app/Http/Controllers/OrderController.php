<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Customer;
use App\Models\Category;

use App\Models\BillDetail;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use function Psy\debug;

class OrderController extends Controller
{

    public function checkout(Request $request)
    {
        $cart = Session::get('cart');
        $category = Category::where('parent_id', '=', null)->get();
        return view('client.orders.checkout', compact('category', 'cart'));
    }

    // Tạo hàm postCheckout để thực hiện thanh toán và đặt hàng truyền tham số Request vào
    public function postCheckout(Request $request)
    {
        // Gọi giỏ hàng có trong checkout ra
        $cart = Session::get('cart');
        // Tạo biến để lưu data vào Customer(khách hàng)
        $customer = new Customer();
        $data = $request->all();
        $customer->fill($data);
        $customer->save();

        // Tạo biến để lưu data vào Bill(Hóa đơn)
        $bill = new Bill();
        $bill->cutomer_id = $customer->id;
        $bill->total = $cart->totalPrice;
        $bill->date_order = date('y-m-d');
        $bill->payments = $request->payment;
        $bill->note = $request->note;
        $bill->save();
        $email = $customer->email;
       
        // Thực hiện lưu các sản phẩm vào BillDetail(Chi tiết hóa đơn, đơn hàng)
        foreach ($cart->products as $key => $value) {
            $billdetail = new BillDetail();
            $billdetail->bill_id = $bill->id;
            $billdetail->product_id = $key;
            $billdetail->quantity = $value['quantity'];
            $billdetail->unit_price = $value['price'];
            $billdetail->save();
        }
        //Dùng mail::send để gửi mail thông bóng xác nhận đơn hàng cho khách hàng 
        Mail::send('client.email.order',[
            'order' => $bill,
            'items' => $cart->products,
        ],function($mail) use($email){
            $mail->from('thientamjvb@gmail.com');
            $mail->to($email);
            $mail->subject('Gửi email đặt hàng');
        });
        Session::forget('cart');
        return redirect()->back()->with('msg', 'Thêm sản phẩm thành công');
    }
}
