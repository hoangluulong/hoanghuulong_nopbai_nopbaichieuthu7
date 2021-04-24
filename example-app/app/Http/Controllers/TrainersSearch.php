<?php

namespace App\Http\Controllers;

use App\Models\Trainers;

class TrainersSearch extends Controller
{
    public function trainerssearch($name) {
        $obj = DB::select('select * from trainers where trainer_name  LIKE' + $name);
        $trainerssearch = $obj->paginate(15);
        return view('trainerssearch', ['trainers' => $trainerssearch]);
    }
}
