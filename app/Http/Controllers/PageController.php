<?php

namespace App\Http\Controllers;

use App\Services;
use  Request;
use App\Feedback;
use Illuminate\Support\Facades\Input;
use DB;

class PageController extends Controller
{
    public function shopDetails($id)
    {
        $shop = Services::findOrFail($id);
        $feedbacks = Feedback::where('serviceid', $shop->id)->get();
        return view('shopDetails', compact('shop', 'feedbacks'));
    }


    public function searchResult()
    {
        $conditions = array();
        $type = Input::get('cat');


        $request = Request::all();

        $circle_radius = 3959 * 2;
        $max_distance = 1200;

        $lat = $request['lat'];
        $lon = $request['lon'];


        $shops = DB::select('SELECT *  FROM
        (SELECT *,
        (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(lat)) *
        cos(radians(lon) - radians(' . $lon . ')) +
        sin(radians(' . $lat . ')) * sin(radians(lat))))
        AS distance
        FROM services ) AS distances
    WHERE distance < ' . $max_distance . '
    ORDER BY distance LIMIT 1;');


        return view('searchResult', compact('shops'));
    }
}
