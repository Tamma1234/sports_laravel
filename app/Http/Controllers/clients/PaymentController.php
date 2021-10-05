<?php

namespace App\Http\Controllers\Clients;

// Gọi các table trong model

use App\Events\HelloPusherEvent;
use App\Models\Bill;
use App\Models\Product;
use App\Models\Category;

// use Exception;
use Mockery\Exception;
// Các lớp để thực hiện thanh toán paypal
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\Payer;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

use App\Models\BillDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use PayPal\Api\PaymentExecution;
use App\Service\Service;

class PaymentController extends Controller
{

    private $apiContext;
    public function __construct()
    {
        // Khởi tạo ngữ cảnh
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig(config('paypal.settings'));

        $this->totalPrice = 0;
        $this->totalAmount = 0;
    }

     /**
     * checkout.
     * 
     * @param Request $request
     * 
     * @return orders.checkout
     */
    public function checkout(Request $request)
    {
        $cart = Session::get('cart');
        $category = Category::where('parent_id', '=', null)->get();
        return view('clients.orders.checkout', compact('category', 'cart'));
    }

  /**
     * postCheckout.
     * 
     * @param CustomerRequest $request
     * 
     * @return list-order
     */
    public function postCheckout(CustomerRequest $request)
    {
        // Gọi giỏ hàng có trong checkout ra
        $cart = Session::get('cart');
        // Tạo biến để lưu data vào Bill(Hóa đơn)
        $bill = new Bill();
        $bill->full_name = $request->full_name;
        $bill->email = $request->email;
        $bill->phone_number = $request->phone_number;
        $bill->address = $request->address;
        $bill->total = $cart->totalPrice;
        $bill->date_order = date('y-m-d');
        $bill->payments = $request->payments;
        $bill->bill_active = $bill->payments;
        $bill->bill_destroy = "";
        $bill->note = $request->note;
        $bill->save();
        // Tạo biến trỏ đến thông tin người đặt hàng
        $email = $bill->email;
        $name = $bill->full_name;

        // Thực hiện lưu các sản phẩm vào BillDetail(Chi tiết hóa đơn, đơn hàng)
        foreach ($cart->products as $key => $value) {
            $billdetail = new BillDetail();
            $billdetail->bill_id = $bill->id;
            $billdetail->product_id = $key;
            $billdetail->quantity = $value['quantity'];
            $billdetail->unit_price = $value['price'];
            $billdetail->save();
        }
        // Nếu payments == 0 trả về thanh toán khi chuyển khoản
        if ($bill->payments == "0") {
            Service::getSendMail()->sendPaymentMail($name, $email, $bill, $cart);
            $request->session()->put('email', $email);
            Session::forget('cart');
            event(new HelloPusherEvent($request));
            return redirect()->route('alert');
        } 
        else {
            [$paymentId, $approvalUrl] = Service::getProcessOrder()->paymentByPaypal($this->apiContext, $cart);
            $email = $request->email;
            $request->session()->put('email', $email);
            Session::put('payment_id', $paymentId);
            Session::forget('cart');
           
            return redirect()->to($approvalUrl);
        }
    }

     /**
     * alertMessa.
     * 
     * @param Request $request
     * 
     * @return alert.message
     */
    public function alertMessa(Request $request)
    {

        $category = Category::where('parent_id', '=', null)->get();
        return view('clients.alert.message', compact('category'));
    }

     /**
     * delete.
     * 
     * @return email.login
     */
    public function loginEmail()
    {
        $category = Category::where('parent_id', '=', null)->get();
        return view('clients.email.login', compact('category'));
    }

      /**
     * postLogin.
     * 
     * @param Request $request
     * 
     * @return list-order
     */
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $email = $request->email;
        if (Bill::where('email', $email)->exists()) {
            $request->session()->put('email', $email);
            return redirect()->route('list-order');
        }
        // Còn không sẽ báo lỗi 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

      /**
     * logoutEmail.
     * 
     * @param Request $request
     * 
     * @return home
     */
    public function logoutEmail(Request $request)
    {
        $oldemail = Session('email') ? Session('email') : null;
        $request->session()->forget('email', $oldemail);
        return redirect()->route('home');
    }

     /**
     * listOrder.
     * 
     * @param Request $request
     * 
     * @return orders.list
     */
    public function listOrder(Request $request)
    {
        $oldemail = Session('email') ? Session('email') : null;
        $bill = new Bill();
        if ($oldemail) {
            $category = Category::where('parent_id', '=', null)->get();
            if (isset($_GET['is_active'])) {
                $is_active = $_GET['is_active'];
                if ($is_active == 'cho-xac-nhan') {
                    $bills = Bill::where('bill_active', '=', 0)->orderBy('id','desc')->Paginate(8);
                } elseif ($is_active == 'da-xac-nhan') {
                    $bills = Bill::where('bill_active', '=', 1)->orderBy('id','desc')->Paginate(8);
                } elseif ($is_active == 'da-thanh-toan') {
                    $bills = Bill::where('bill_active', '=', 2)->orderBy('id','desc')->Paginate(8);
                } elseif ($is_active == 'da-hoan-thanh') {
                    $bills = Bill::where('bill_active', '=', 3)->orderBy('id','desc')->Paginate(8);
                } elseif ($is_active == 'huy-don-hang') {
                    $bills = Bill::where('bill_active', '=', 4)->orderBy('id','desc')->Paginate(8);
                }
            }  
            else {
                $bills = Bill::where('email','like',$oldemail)->orderBy('id','desc')->paginate(8);
            }
            return view('clients.orders.list', compact('category', 'bills','bill'));
        } else {
            return redirect()->route('login.email');
        }
    }

      /**
     * create.
     * 
     * @param Request $request
     * 
     * @return list-order
     */
    public function create(Request $request)
    {
        $payment_id = Session::get('payment_id');
        Session::forget('payment_id');

        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        $payment = Payment::get($payment_id, $this->apiContext);

        try {
            $result = $payment->execute($execution, $this->apiContext);
            if ($result->getState() == "approved") {

                return redirect()->route('list-order');
            }
        } catch (Exception $e) {
            return "faild";
        }
    }

      /**
     * detailOrder.
     * 
     * @param Request $request
     * 
     * @return orders.detail
     */
    public function detailOrder(Request $request)
    {
        $bill = Bill::find($request->id);
        $category = Category::where('parent_id', '=', null)->get();
        return view('clients.orders.detail', compact('category', 'bill'));
    }

      /**
     * billDestroy.
     * 
     * @param Request $request
     * 
     * @return 
     */
    public function billDestroy(Request $request)
    {
        $data = $request->all();
        $bill = Bill::find($request->id);
        $bill->bill_destroy = $data['cause'];
        $bill->bill_active = 4;
        $bill->save();
    }
}
