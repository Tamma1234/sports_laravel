<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'name',
        'parent_id',
        'slug'
    ];


    // Tạo hàm hasProducts để liên kết vs table product
    function hasProducts()
    {
        return $this->hasMany(Product::class);
    }

  // Tạo hàm hasProducts trả về hasOne để lấy ra các parent_id con trong category
    public function hasParentCate()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    // Tạo hàm saveAdd để lưu data category lên db thông qua form cảeate view blade
    // Tham số truyền vào là request để lấy data 
    // Dùng hàm save để lưu data
    function saveAdd(Request $request)
    {
        $cate = new Category();
        $data = $request->all();
        $data['slug'] = Str::of($request->name)->slug('-');
        $cate->fill($data);
        $cate->save();
    }

    // Tạo hàm saveAdd để lưu data category lên db thông qua form edit ở view blade
    // Tham số truyền vào là request để lấy data 
    // Dùng update để cập nhập data mới
    function saveUpdate(Request $request)
    {
        $category = Category::find($request->id);
    
        $data = $request->all();
        $category->fill($data);
        $category->update($data);
    }
}
