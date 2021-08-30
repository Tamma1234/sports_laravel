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

    // Tạo hàm product để liên kết với table Product
    public function Product()
    {
        return $this->belongsToMany(Product::class);
    }

    function saveSize(Request $request)
    {
        $size = new size();
        $data = $request->all();
        $size->fill($data);
        $size->save();
    }
}
