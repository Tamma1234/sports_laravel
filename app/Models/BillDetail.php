<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;
  protected $table = "bill_detail";

  protected  $fillable = [
        'bill_id',
        'product_id',
        'quantity',
        'unit_price'
  ];

  public function hasProduct()
  {
      return $this->belongsTo(Product::class, 'product_id', 'id');
  }

  public function hasBill()
  {
      return $this->belongsTo(Bill::class, 'bill_id', 'id');
  }

 
}
