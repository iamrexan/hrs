<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\Academics;
use Session;
use Auth;

class academicsController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        if(Auth::user()->alumni == 'admin') {
        $academics = new Academics;
        return view('academics', ['academics' => $academics]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function storeInTo(Request $request) {
        if(empty($request->abt_ov_ov_desc)) {
            Session::put('message', 'Value should not be empty');
            return back();
        } else {
            $aboutMod = new Academics; 
            $aboutMod = Academics::find($request->this_id);
            $aboutMod->section_title = $request->section_title;
            $aboutMod->section_inner_title = $request->abt_ov_ov_title;
            $aboutMod->section_inner_description = $request->abt_ov_ov_desc;
            $aboutMod->created_by = $request->created_by;
            $aboutMod->visibility_status = $request->visibility_status;
            $aboutMod->save();
            Session::put('message', 'Successfully updated');
            return back();
        }
    }
}
