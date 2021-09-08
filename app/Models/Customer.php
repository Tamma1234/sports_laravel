<?php

namespace App\Models;

use Illuminate\Http\Request;
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

    function saveCustomer(Request $request){
        $customer = new Customer();
       
    
    }
}
