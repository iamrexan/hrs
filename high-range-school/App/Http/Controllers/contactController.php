<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use Session;
use HRS\Contact;
use Auth;

class contactController extends Controller
{
    protected $redirect = '/';
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function contactShowUp() {
        if(Auth::user()->alumni == 'admin') {
            $contacts = new Contact;
            return view('contact', ['contacts' => $contacts]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function addressSetup(Request $request) {
        $rules = [
            'this_id' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'hours' => 'required',
            'add_line_1' => 'required',
        ];
        $this->validate($request, $rules);
        $contact = new Contact;
        if(empty($request->inst_name)) {
            Session::put('message', 'Required field should not be empty');
            return back();
        } else {
            $contact = $contact->find($request->this_id);
            $contact->inst_name = $request->inst_name;
            $contact->add_line_1 = $request->add_line_1;
            $contact->add_line_2 = $request->add_line_2;
            $contact->mail = $request->mail;
            $contact->phone = $request->phone;
            $contact->hours = $request->hours;
            $contact->save();
            Session::put('message', 'Updated successfully');
            return back();
        }
    }
}
