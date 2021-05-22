<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Companies;
use App\Models\Trainers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends Controller
{
    public function searchCompanies(Request $request)
   {

      $name = $request->get('search');
      $obj = new Companies();
      $search = $obj->search($name)->paginate(25);
      $obj1 = new Categories();
      $categories = $obj1->pluck('category_name');
      return view('searchcompanies', [
         'companies' => $search,
         'name' => $name,
         'categories'=> $categories,
      ]);
   }

//   public function searchTrainers(Request $request)
//   {
//
//      $name = $request->get('search');
//      //    var_dump($name);die();
//      //    die();
//      $obj = new Trainers();
//      $search = $obj->search($name)->paginate(25);
//      return view('searchtrainers', ['trainers' => $search, 'name' => $name]);
//   }
}
