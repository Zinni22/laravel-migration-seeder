<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::where('orario_di_partenza', '>=', date('2023-03-14'))->get();
    
        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
