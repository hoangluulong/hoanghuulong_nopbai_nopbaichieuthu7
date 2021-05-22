<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Companies;

class Trainers extends Model
{
    protected $table = 'trainers';

    public function search($input) {
        $data = self::where('trainer_name', 'like', "%{$input}%")->paginate(10);
        return $data;
    }
    
    public function companiesTrainer(){
        return $this->hasOne(Companies::class, 'company_id', 'company_id');
    }
}
