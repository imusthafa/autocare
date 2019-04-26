<?php

namespace App\Http\Controllers;

use App\Feedback;
use Request;

class Feedbackcontroller extends Controller
{
    public function feedback()
    {
        return view('feedback.newfeedback');
    }
    public function storeFeedback()
    {
        $req = Request::all();
        Feedback::create($req);
        return redirect('/shop/' . $req['serviceid']);
    }

    public function viewFeedbacks()
    {
        $feedbacks = Feedback::all();
        return view('feedback.viewfeedback', compact('feedbacks'));
    }
}
