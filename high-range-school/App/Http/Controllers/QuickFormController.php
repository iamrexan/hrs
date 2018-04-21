<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\QuickContactForm;
use Session;

class QuickFormController extends Controller
{
    function quickForm(Request $request) {
        $rules = [
            'fname' => 'required|Alpha',
            'lname' => 'required|Alpha',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|max:255'
        ];
        
        $this->validate($request, $rules);
        $quickform = new QuickContactForm;
        $quickform->fname = $request->fname;
        $quickform->lname = $request->lname;
        $quickform->email = $request->email;
        $quickform->phone = $request->phone;
        $quickform->message = $request->message;
        $quickform->save();
        Session::put('user_message', 'Thanks for contacting us');
        return back();
    }
}
