<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

//utilizzo della libreria caebon
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $trains = Train::whereDate('orario_partenza', $today)->get();

        return view('trains.index', compact('trains'));
    }
}
