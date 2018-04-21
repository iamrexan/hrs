<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App;
use Session;
use Auth;
use HRS\AdminHome;
use HRS\AdminGallery;
use HRS\newsEvents;
use HRS\Banner;
use HRS\digitaLirary;
use HRS\Http\Requests;
use Illuminate\Support\Facades\Storage;

class adminHomeController extends Controller
{    
    protected $redirect = "/";
    public function __construct() {
        $this->middleware('auth');
    }
    public function storeHomeWelcome(Request $request) {
       $welcomeText = AdminHome::find(7)->update(['description'=>$request->description]);
       return back();
    }
    
    public function showHomeWelcome() {
        if(Auth::user()->alumni == 'admin') {
            $home_welcome = AdminHome::where('id', '7')->limit(1)->get();
            $home_news = newsEvents::find(1)->get();

            $filel = Storage::files('images');  
            $banner = Banner::get()->where('visibility_status', 'on');
            $adminGallery = AdminGallery::get()->where('visibility_status', 'on');
            $libraryFiles = digitaLirary::get()->where('visibility_status', 'on');
            return view('admin_home', ['home_welcome' => $home_welcome, 'home_news' => $home_news, 'filel' => $filel, 'banner' => $banner, 'adminGallery' => $adminGallery, 'libraryFiles' => $libraryFiles]);
        } else {
            return 'Unautherized to access this page';
        }
    }
    
    public function getImageLocation() {
        $dir = '/images';
        $showDir = scandir($dir, 1);
        return view('welcome');
    }
    
    public function showAllImages() {
        $filel = Storage::directories();
        return view('layouts.file_window', ['filel' => $filel]);
    }
    
    public function StoreGallery(Request $request) {
        $rules = array (
            'image' => 'required|image',
        );
        $this->validate($request, $rules);
        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/gallery'), $imageName);
        $imageUrl = 'uploads/gallery/'. $imageName;
        $create = AdminGallery::create([
            'imageUrl' => $imageUrl,
            'created_by' => $request->created_by,
            'visibility_status' => $request->visibility_status
        ]);
        
        if(!$create) {
            return response('fail');
        }
        Session::put('message', 'Image uploaded into gallery successfully');
        return back();
    }
    
    public function deleteGallery(Request $request) {
        if(!Storage::delete(substr($request->image_to_delete, -22))) {
            Session::put('message', 'Sorry! we have some issue please try again later');
            return back();
        } else {
            AdminGallery::where('id', $request->id)->delete();
            Session::put('message', 'Image Deleted Successfully from gallery');
            return back();   
        }
    }
    
    public function degitalFileUpload(Request $request) {
            $rules = array(
                'title' => 'required|min:5|max:50',
                'file' => 'required|file|mimes:pdf,txt,docx,xls,doc,ppt,pps,dot,dotx'
            );
            $this->validate($request, $rules);
            $fileExtension = $request->file('file')->getClientOriginalExtension();
            $fileName = time().'.'.$fileExtension;
            $request->file('file')->move(public_path('uploads/files'), $fileName);
            $file_location = 'uploads/files/'. $fileName;
            
            digitaLirary::create([
               'title' => $request->title,
               'file_location' => $file_location,
               'created_by' => $request->created_by,
               'visibility_status' => $request->visibility_status,
            ]);
            Session::put('message', 'Your File uploaded successfully');
            return back();
    }
    public function dellibrary(Request $request) {
        if(!Storage::delete(substr($request->file_to_delete, -20))) {
            Session::put('message', "Sorry! can't delete try again later");
            return back();
        } else {
            digitaLirary::where('id', $request->id)->delete();
            Session::put('message', 'Library File Deleted Successfully');
            return back();
        }
        
    }
}
