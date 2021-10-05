<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Bill;
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
    // Hàm liên kết với table bills(hóa đơn)
    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bill_detail', 'product_id', 'bill_id');
    }

    // Hàm liên kết vời table bill(hóa đơn)
    public function billDetail()
    {
        return $this->hasMany(BillDetail::class,'product_id','id');
    }

    // Hàm size để liên kết table product vs table category
    public function hasCate()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
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
            $data['image_url'] = $request->file('image_url')->storeAs('images', $fileName,'public');
        }
        $product->fill($data);
        $product->save();
        $productId = $product->id;
        $size = $request->size;
        $pro = Product::find($productId);
        // Dùng attach để thêm data size vào table trung gian thông qua hàm size()
        $pro->size()->attach($size);
        // // Kiểm tra xem có các file image gallery trong sản phẩm vừa thêm k
        //Sau đó lưu vào file public/images/gallery
        // Dùng GalleryProduct::create lưu image gallery lên db trong table gallery 
        if ($request->hasFile('gallery')) {
            $files = $data['gallery'];
            foreach ($files as $file) {
                $originalFileName = $file->getClientOriginalName();
                
                $fileNameGallery = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                
                $fileGllery = $file->storeAs('gallery', $fileNameGallery,'public');
               
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
        $product = Product::find($request->id);
        $data = $request->except('_token');
        $size = $product->size;
        $datasize = $data['size'];
        // Kiểm tra xem có tồn tại size trên table size k, nếu có thì xóa và thêm data size ms vào.
        if ($size) {
            $product->size()->detach($size);
        }
        $product->size()->attach($datasize);
        // Kiểm tra xem có file gallery không, nếu có thì dùng destroy để xóa đi gallery[] cũ
        // Sau đó dùng create để thêm ms file image gallery [] vào table gallery thuộc id product
        if ($request->hasFile('gallery')) {
            $gallery = $product->showGallery;
            GalleryProduct::destroy($gallery);
            $files = $data['gallery'];
            foreach ($files as $file) {
                $productId = $request->id;
                $originalFileName = $file->getClientOriginalName();
                $fileNameGallery = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                $fileGllery = $file->storeAs('gallery', $fileNameGallery,'public');
                GalleryProduct::create([
                    'product_id' => $productId,
                    'filename' => $fileGllery
                ]);
            }
        }
        // Kiềm tra có file image k, nếu có thì dùng delete xóa file $product->image_url có sẵn
        // Sau đó thêm file image ms rồi dùng move lưu vào public/images
        if ($request->hasFile('image_url')) {
            Storage::disk('public')->delete($product->image_url);
            // dd( Storage::disk('public'));
            // dd(Storage::disk('public')->delete($product->image_url));
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
          
            $data['image_url'] = $request->file('image_url')->storeAs('images', $fileName,'public');
          
        }
        $product->update($data);
    }
}
