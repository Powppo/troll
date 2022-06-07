<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;



class feedbackController extends Controller
{
    public function index()
    {   
        return view('review.feedback');
    }

    protected function createfeedback(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $feedback = new feedback;
        $feedback->name = $request->name;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        if ($feedback->save())
        {
            return redirect('feedback')->with('status', 'Feedback Accepted');
        } else {
            return redirect('feedback')->with('status', 'Feedback Denied');

        }
    }
}

