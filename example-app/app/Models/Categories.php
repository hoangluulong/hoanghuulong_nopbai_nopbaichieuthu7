<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    
    public function AllCategory()
    {
        $categories = $this->all();
        return $categories;
    }

//    public function categoryPluck()
//    {
//        $categories = $this->pluck('category_name', 'category_id');
//        return $categories;
//    }
    
    public function getPluckSearch()
    {
        $categories = $this->pluck('category_name', 'category_id');
        return $categories;
    }
}
