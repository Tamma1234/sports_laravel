<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;

class Color extends Model
{
    use HasFactory;
    protected $table ="color";

    protected $fillable = [
        'name'
    ];

    // Tạo hàm hasProducts để truy xuất data liên kết vs table product
    public function hasProducts()
    {
      return $this->hasMany(Product::class,'color_id','id');
    }

    // Tạo hàm saveAdd để lưu data color lên db thông qua form create view blade
    // Tham số truyền vào là request để lấy data 
    // Dùng hàm save để lưu data
    function saveColor(Request $request){
        $color = new Color();
        $data = $request->all();
        $color->fill($data);
        $color->save();
    }
}
