<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::where('departure_day', '>', now())->get();

        foreach ($trains as $train) {

            $train->departure_time = date("H:i", strtotime($train->departure_time));
            $train->arrival_time = date("H:i", strtotime($train->arrival_time));


            if ($train->on_schedule == true) {
                $train->on_schedule = "";
            } else {
                $train->on_schedule = "Ritardo";
                $delayed = "table-warning";
            }

            if ($train->is_cancelled == true) {
                $train->is_cancelled = "Cancellato";
            } else {
                $train->is_cancelled = "";
            }
        }

        return view('home', compact('trains', 'delayed'));
    }
}
