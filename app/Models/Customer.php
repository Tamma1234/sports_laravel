<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'note'
    ];

    function hasBill(){
       return $this->hasMany(Bill::class,'cutomer_id','id','email');
    }
}
