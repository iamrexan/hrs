<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\About;
use Session;
use Auth;

class aboutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        if(Auth::user()->alumni == 'admin') {
        $newsev = new About;
        return view('about', ['newsevents' => $newsev]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function storeInTo(Request $request) {
        if(!$request->this_id) {
            if(empty($request->abt_ov_ov_title) || empty($request->abt_ov_ov_desc) || empty($request->section_title)) {
                Session::put('message', 'Title and description should not empty');
                return back();
            } else {
                $aboutMod = new About; 
                $aboutMod->section_title = $request->section_title;
                $aboutMod->section_inner_title = $request->abt_ov_ov_title;
                $aboutMod->section_inner_description = $request->abt_ov_ov_desc;
                $aboutMod->created_by = $request->created_by;
                $aboutMod->visibility_status = 'yes';
                if(!$aboutMod->save()) {
                    Session::put('message', 'error established while update you details.. please try again');
                    return back();
                } else {
                    Session::put('message', 'Created Successfully');
                    return back();
                } 
            }  
        } else {
            $aboutMod = new About; 
            $aboutMod = About::find($request->this_id);
            $aboutMod->section_title = $request->section_title;
            $aboutMod->section_inner_title = $request->abt_ov_ov_title;
            $aboutMod->section_inner_description = $request->abt_ov_ov_desc;
            $aboutMod->created_by = $request->created_by;
            $aboutMod->visibility_status = $request->visibility_status;
            $aboutMod->save();
            Session::put('message', 'Updated Successfully');
            return back();
        }
    }
    
    public function updateVisibility(Request $request) {
        if($request->this_id !== null) {
            $aboutMod = new About; 
            $aboutMod = About::find($request->this_id);
            $aboutMod->section_title = $request->section_title;
            $aboutMod->section_inner_title = $request->abt_ov_ov_title;
            $aboutMod->section_inner_description = $request->abt_ov_ov_desc;
            $aboutMod->created_by = $request->created_by;
            $aboutMod->visibility_status = $request->visibility_status;
            $aboutMod->save();
            echo "success";
        } else {
            echo "id not comes to desk";
        }
    }
}
