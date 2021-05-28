<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Categories;
use App\Models\Companies;
use App\Models\Trainers;
class SearchController extends Controller
{
//    public function searchCompanies(Request $request)
//   {
//
//      $category = new Categories();
//      $categories = $category->categoryPluck();
//        
//      $name = $request->get('search');
//      
//      $obj = new Companies();
//      $search = $obj->search($name)->paginate(25);
//      $obj1 = new Categories();
//      $categories = $obj1->pluck('category_name');
//      return view('searchcompanies', [
//         'companies' => $search,
//         'name' => $name,
//         'categories'=> $categories,
//      ]);    
//   }
   
   function searchCompanies(Request $request){
        $categoryModel = new Categories();
        $categories = $categoryModel->getPluckCategories();

        if($request->input('k') || $request->input('categoryName')){
            $key = $request->input('k');
            $categoryName = $request->input('categoryName');
            $companyModel = new Companies();
            $result = $companyModel->search($key, $categoryName);

            return view('searchcompanies',[
                'companies' => $result,
                'key' => $key,
                'categories' => $categories
                ]);
        }
        
        return view('searchcompanies',['categories' => $categories]);
    }
   
}
