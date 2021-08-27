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

    function hasProducts(){
        return $this->hasMany(Product::class, 'category_id','id');
    }
    public function hasParentCate(){
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }


    function saveCate(Request $request){
        $cate = new Category();
        $data = $request->all();
        $data['slug'] = Str::of($request->name)->slug('-');
     
        $cate->fill($data);
        $cate->save();
    }

    function saveUpdate(Request $request){
        $category = Category::find($request->id);
        $data = $request->all();
        $category->fill($data);
        $category = Category::where('id', $request->id)->update($data);
    }

    
}
