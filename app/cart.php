<?php 
 namespace App;

use App\Models\Product;
use PhpParser\Node\Expr\Cast\Array_;

class Cart {
    // Khai báo cái đối tượng gồm danh sách sản phẩm, tổng tiền, tồng số lượng 
    public  $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;
    public $totalPriceUsd = 0;
    
    // Dựng hàm khởi tạo vs tham số truyền vào $cart (truyền vào giỏ hàng hiện tại)
    public function __construct($cart)
    {
        // Kiểm tra xem giỏ hàng hiện tại có hay k
        // Nếu có thì truyền danh sách, tổng tiền, tổng số lượng vào
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalPriceUsd = $cart->totalPriceUsd;
            $this->totalQuantity = $cart->totalQuantity;    
        }
    }

    // Tạo hàm addCart để thêm giỏi hàng theo id của sp đó
    public function addCartItem($product,$id,$quantity,$size)
    {
        // tạo một sản phảm mới
        $newProduct = ['quantity'=>0,'size'=> 0, 'price'=>$product->price,'productInfo'=>$product];
        if($this->products){
            // Kiểm tra id có trong sản phẩm(products) nằm trong giỏ hàng k 
            // Nếu có thì cho sp thêm mới vào = vs newproduct(sp có sẵn rồi) 
            if(array_key_exists($id,$this->products)){ 
            $newProduct = $this->products[$id];
            }
        }
        // Nếu tồi tại thì + thêm quantity(số lượng) trong giỏ hàng 
        $newProduct['quantity'] = $newProduct['quantity'] + $quantity;
        // Tính giá = Số lượng(newProduct) * giá(price)
        $newProduct['price'] =   $newProduct['quantity'] * $product->price;

        $newProduct['size'] = (int)$size;
        // Thêm product id vào newproduct

        $this->products[$id] = $newProduct;
        // Tính tổng giá 
        $this->totalPrice += $newProduct['price'];

        $this->totalPriceUsd += $this->totalPrice/23000;
        // dd(round($this->totalPriceUsd,2));die;
        // Tổng số lượng 
       $this->totalQuantity =  $this->totalQuantity +  $newProduct['quantity'];


    }

    public function deleteCart($id)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function updateCart($id,$quantity)
    {

        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        
        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;

        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];
    }


  }
?>