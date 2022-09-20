<?php
namespace App\Services;

use App\Models\Category;

class CategoryService{

    public function create($validated){
       Category::create($validated);
    }


}
