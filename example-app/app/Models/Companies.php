<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Companies extends Model
{
    protected $table = 'companies';
    
    public function trainerCompanies(){ 
        return $this->hasOne(Trainers::class, 'company_id', 'company_id');
    }
    
    public function companyOfCategory(){
        return $this->hasMany(Categories::class, 'category_id', 'category_id');
    }
    
    public function search($name,$category_name){
        $company = $this ->where('category_id', $category_name)
                        ->paginate(15);

        $company->withPath(route('searchCompanies') . "?name=" . str_replace(' ','+', $name));
        return $company;
    }
}
