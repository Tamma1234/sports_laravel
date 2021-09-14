<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\BillDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected  $fillable = [
        'cutomer_id',
        'total',
        'payments',
        'note'
  ];

  public function hasCustomer()
  {
      return $this->belongsTo(Customer::class, 'cutomer_id', 'id');
  }

  public function hasBillDetail()
  {
      return $this->hasMany(BillDetail::class);
  }
}
