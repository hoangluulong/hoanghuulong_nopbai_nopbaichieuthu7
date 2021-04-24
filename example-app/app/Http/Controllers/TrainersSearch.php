<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class TrainersSearch extends Controller
{
    public function trainerssearch(Request $request) {
        
        $obj = new Trainers();
        
        if($request->input('trainer_name')){
            $name = $request->input('trainer_name');
        
            $trainerssearch = $obj->search($name);
            
            return view('search', ['trainerssearch' => $trainerssearch, 'name' =>$name]);
        }
        return view('search', []);
    }
}
