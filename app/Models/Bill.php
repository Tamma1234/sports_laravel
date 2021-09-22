<?php

namespace App\Models;

use App\Models\Customer;
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
        'cutomer_id',
        'date_order',
        'total',
        'payments',
        'bill_active',
        'bill_destroy',
        'note'
  ];

  public function hasCustomer()
  {
      return $this->hasOne(Customer::class, 'id', 'cutomer_id');
  }

  public function hasBillDetail()
  {
      return $this->hasOne(BillDetail::class);
  }
}
