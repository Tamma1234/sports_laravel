<?php

namespace App\Models;


use App\Models\BillDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use Notifiable,SoftDeletes;// add soft delete
    use HasFactory;

    protected  $fillable = [
       
        'date_order',
        'total',
        'full_name',
        'email',
        'phone_nember',
        'address',
        'payments',
        'bill_active',
        'bill_destroy',
        'note'
  ];

  public function hasBillDetail()
  {
      return $this->hasOne(BillDetail::class);
  }

  public function product()
  {
      return $this->belongsToMany(Product::class, 'bill_detail', 'bill_id', 'product_id');
  }
}
