<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use Auth;
use Session;
use HRS\Alumni;

class alumniController extends Controller
{
    protected $redirect = '/';
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showPage() {
        if(Auth::user()->alumni == 'admin') {
            $alumni = new Alumni;
            return view('alumni', ['alumni' => $alumni]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function updatePage(Request $request) {
        if(empty($request->description)) {
            Session::put('message', 'Value should not be empty');
            return back();
        } else {
            $curr = new Alumni;
            $curr = Alumni::find($request->this_id);
            $curr->section_title = $request->section_title;
            $curr->title = $request->title;
            $curr->description = $request->description;
            $curr->created_by = Auth::user()->name;
            $curr->save();
            Session::put('message', 'Successfully updated');
            return back();
        }
    }
}
