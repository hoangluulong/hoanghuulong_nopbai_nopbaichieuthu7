<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function categories()
    {
        $obj = new Categories();
        $categories = $obj->paginate(20);
        return view('categories', ['categories' => $categories]);
    }

    public function myMethod(){
        $categories = DB::table('categories')->pluck('category_id', 'category_name')->toArray();

        return view('categories', ['categories' => $categories]);
    }
}
