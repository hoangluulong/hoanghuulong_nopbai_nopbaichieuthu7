<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class TrainersSearch extends Controller
{
    public function trainerssearch(Request $request) {
        $name = $request->get('trainer_name');
        $obj = new Trainers();
        $trainerssearch = $obj->search($name);
        return view('search', ['trainerssearch' => $trainerssearch]);
    }
}
