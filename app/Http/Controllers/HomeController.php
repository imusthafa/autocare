<?php

namespace App\Http\Controllers;

use Request;
use App\Services;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services=services::where('userid',auth::user()->id)->get();
         return view('home',compact('services'));
        
  
    }
    public function newService()
    {
        return view('newService');
    }

    public function storeService()
    {
        $req = Request::all();
        $req['userid'] = Auth::user()->id;
        Services::create($req);
        return redirect('/home');
    }
}
