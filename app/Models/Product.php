<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Size;
use App\Models\Color;
use App\Models\Category;
use App\Models\GalleryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


public function showGallery()
{
    return $this->hasMany(GalleryProduct::class,'product_id');
}

    public function size()
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id');
    }

    public function hasCate()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function hasColor()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }

    public function saveAdd(Request $request)
    {
        $product = new Product();
        $data = $request->all();
        //Thêm image chính
        if ($request->hasFile('image_url')) {
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->move('images', $fileName);
            //  var_dump($data['image_url']);die;
        }
        $product->fill($data);
        $product->save();
        $productId = $product->id;
        // Thêm gallery image phụ
        $size = $request->size;
        $pro = Product::find($productId);
        $pro->size()->attach($size);
        if ($request->hasFile('gallery')) {
            $files = $data['gallery'];
            foreach ($files as $file) {
                $originalFileName = $file->getClientOriginalName();
                $fileNameGallery = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                var_dump($fileNameGallery);die;
                $fileGllery = $file->move('images/gallery', $fileNameGallery);
                GalleryProduct::create([
                    'product_id'=>$productId,
                    'filename'=>$fileGllery
                ]);
            }
           
        }
      
    }

    public function saveEdit(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $data = $request->except('_token');
    //    echo '<pre>';
    //     var_dump($data);die;
        if(file_exists($request->file('image_url'))){
            $product->image_url = $request->file('image_url')->store('prod_image','public');
    
        }
        if ($request->hasFile('image_url')){
            // var_dump($product->image_url);die;
            Storage::disk('public')->delete($product->image_url);
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->move('images', $fileName);
           
        }
        $product = Product::where('id', $request->id)->update($data);
    
    }

}
