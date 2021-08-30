<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\GalleryProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'title',
        'image_url',
        'category_id',
        'price',
        'masp',
        'gallery_id',
        'description',
        'color_id',
        'is_active'
    ];

   // Hàm size để liên kết table product vs table size
    public function showGallery()
    {
        return $this->hasMany(GalleryProduct::class, 'product_id');
    }
    
    // Hàm size để liên kết table product vs table size
    public function size()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id');
    }

     // Hàm size để liên kết table product vs table category
    public function hasCate()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

     // Hàm size để liên kết table product vs table color
    public function hasColor()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }

    // Tạo saveAdd để lưu dữ liệu từ form, truyền vào tham số request
    public function saveAdd(Request $request)
    {
        $product = new Product();
        $data = $request->all();
        // Kiếm tra có file image_url k, nếu cố thì lầy file và save vào public/images
        if ($request->hasFile('image_url')) {
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->move('images', $fileName);
        }
        $product->fill($data);
        $product->save();
        $productId = $product->id;
        $size = $request->size;
        $pro = Product::find($productId);
        // Dùng attach để thêm data size vào table trung gian thông qua hàm size()
        $pro->size()->attach($size);
        // Kiểm tra xem có các file image gallery trong sản phẩm vừa thêm k
        //Sau đó lưu vào file public/images/gallery
        // Dùng GalleryProduct::create lưu image gallery lên db trong table gallery 
        if ($request->hasFile('gallery')) {
            $files = $data['gallery'];
            foreach ($files as $file) {
                $originalFileName = $file->getClientOriginalName();
                $fileNameGallery = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                $fileGllery = $file->move('images/gallery', $fileNameGallery);
                GalleryProduct::create([
                    'product_id' => $productId,
                    'filename' => $fileGllery
                ]);
            }
        }
    }

    // Tạo hàm saveEdit để thực hiện lưa product khi thực hiện sửa product,truyền vào tham số request 
    public function saveEdit(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $data = $request->except('_token');
        // Kiểm tra file image có tồn tại k, nếu có thì lưu file vào storerage/app/public/prod_image
        if (file_exists($request->file('image_url'))) {
            $product->image_url = $request->file('image_url')->store('prod_image', 'public');
        }
        // Kiềm tra có file image k, nếu có thì dùng delete xóa file $product->image_url có sẵn
        // Sau đó thêm file image ms rồi dùng move lưu vào public/images
        if ($request->hasFile('image_url')) {
            Storage::disk('public')->delete($product->image_url);
          
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->move('images', $fileName);
        }

        $product->update($data);
    }
}