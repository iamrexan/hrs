<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\Gallery;
use Auth;
use Session;

class galleryController extends Controller
{
    protected $redirect = '/';
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showPage() {
        if(Auth::user()->alumni == 'admin') {
            $gallery = new Gallery;
            return view('gallery', ['gallery' => $gallery]);
        } else {
            return 'Unautherized to access this page';
        } 
    }
    
    public function updateTable(Request $request) {
        if(empty($request->description)) {
            Session::put('message', 'Value should not be empty');
            return back();
        } else {
            $gallery = new Gallery; 
            $gallery = Gallery::find($request->this_id);
            $gallery->section_title = 'About-Gallery';
            $gallery->title = 'About-Gallery';
            $gallery->description = $request->description;
            $gallery->save();
            Session::put('message', 'Successfully updated');
            return back();
        }
    }
}