<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Size extends Model
{
    use HasFactory;
    protected $table = "size";

    protected $fillable = [
        'name'
    ];
    public function products(){
        return $this->belongsToMany(Product::class,'product_size','size_id','product_id');
    }
    
    function saveSize(Request $request){
        $size = new size();
        $data = $request->all();
        $size->fill($data);
        $size->save();
    }
}
