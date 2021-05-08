<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesSearch extends Controller
{
    public function categoriesSearch(Request $request) {
        
        $obj = new Categories();
        
        $category = collect([]);
    }
}
