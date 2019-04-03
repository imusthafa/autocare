<?php

namespace App\Http\Controllers;
use App\Services;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shopDetails($id){
        $shop = Services::findOrFail($id);
        return view('shopDetails',compact('shop'));
    }

}
