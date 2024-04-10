<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        foreach ($trains as $train) {

            if ($train->on_schedule == true) {
                $train->on_schedule = "";
            } else {
                $train->on_schedule = "Ritardo";
            }

            if ($train->is_cancelled == true) {
                $train->is_cancelled = "Cancellato";
            } else {
                $train->is_cancelled = "";
            }
        }

        return view('home', compact('trains'));
    }
}
