<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class GalleryProduct extends Model
{
    use HasFactory;

    protected $table = "gallery";
    protected $fillable = [
        'filename',
        'product_id'

    ];

    // Tạo hàm gallery để liên kết với table product
    public function gallery()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
