<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use Session;
use HRS\Curricular;
use Auth;

class curricularController extends Controller
{
    protected $redirect = '/';
    
    public function __construct() {
        $this->middleware('auth');
    } 
    
    public function showActivitiesPage() {
        if(Auth::user()->alumni == 'admin') {
            $curr = new Curricular; 
            return view('curricular', ['curr' => $curr]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function updatePage(Request $request) {
        if(empty($request->description)) {
            Session::put('message', 'Value should not be empty');
            return back();
        } else {
            $curr = new Curricular; 
            $curr = Curricular::find($request->this_id);
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
