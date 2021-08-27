<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Http\Request;
class Color extends Model
{
    use HasFactory;
    protected $table ="color";

    protected $fillable = [
        'name'
    ];

    public function hasProducts()
    {
      return $this->hasMany(Product::class,'color_id','id');
    }


    function saveColor(Request $request){
        $color = new Color();
        $data = $request->all();
        $color->fill($data);
        $color->save();
    }
}
