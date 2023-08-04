<?php
namespace App\Repository;

use App\Models\Category;
use Illuminate\Config\Repository;

class CategoryRepository extends Repository {

    public function getCate()
    {
      return Category::all();
    }
}
