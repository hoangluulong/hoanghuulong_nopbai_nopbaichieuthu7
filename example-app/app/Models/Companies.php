<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Companies extends Model
{
    protected $table = 'companies';
    
//    public function search($key){
//       $data= self::where('company_name','like','%'.$key.'%');
//        return $data;
//    }
//    
    
    public function getCompanies(){
       $companies =  $this->paginate(15);
       return $companies;
    }
    
    public function trainerCompanies(){ 
        return $this->hasOne(Trainers::class, 'company_id', 'company_id');
    }
    
    public function companyOfCategory(){
        return $this->hasMany(Categories::class, 'category_id', 'category_id');
    }
    
    public function search($key,$categoryName){
        $result = $this ->where('category_id',$categoryName)
                        ->paginate(15);

        $result->withPath(route('searchCompanies') . "?k=" . str_replace(' ','+',$key));
        return $result;
    }
}
