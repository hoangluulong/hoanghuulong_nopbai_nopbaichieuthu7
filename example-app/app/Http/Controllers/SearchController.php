<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Categories;
use App\Models\Companies;
class SearchController extends Controller
{
   
   function searchCompanies(Request $request){
        $categoryModel = new Categories();
        $categories = $categoryModel->getPluckSearch();

        if($request->input('name') || $request->input('category_name')){
            $companyModel = new Companies();
            $result = $companyModel->search($request->input('name'), $request->input('category_name'));

            return view('searchcompanies',[
                'companies' => $result,
                'keys' => $request->input('name'),
                'categories' => $categories
                ]);
        }
        
        return view('searchcompanies',['categories' => $categories]);
    }
   
}
