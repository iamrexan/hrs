<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use DB;
use Session;
use HRS\Http\Requests;
use HRS\Banner;
use Illuminate\Support\Facades\Storage;

class bannerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function addBanner(Request $request) {
        $banner = new Banner;
        $rules = array (
            'banner_title' => 'required',
            'banner_description' => 'required',
            'banner_image' => 'required|image|dimensions:min_width=1300',
        );
        $validator = $this->validate($request, $rules);
        if($request->hasFile('banner_image')) {
            $imageName = time().'.'.$request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->move(public_path('uploads/images'), $imageName);
            $imagePath = 'uploads/images/'.$imageName;
        } else {
            return response()->json(['message' => 'it fails']);
        }
        
        $success = Banner::create([
            'banner_title' => $request->banner_title,
            'banner_description' => $request->banner_description,
            'banner_image' => $imagePath,
            'created_by' => $request->created_by,
            'visibility_status' => $request->visibility_status
        ]);
        if (!$success) {
            return response()->json('error');
        }
        Session::put('message', 'Your Banner updated successfully');
        return back();
    }
    public function updateBanner(Request $request) {
        $banner = new Banner;
        $rules = array(
          'ban_id_get_val' => 'required',
          'ban_tit_get_val' => 'required',  
          'ban_desc_get_val' => 'required',  
        );
        $validator = $this->validate($request, $rules);
        Banner::where('id', $request->ban_id_get_val)->update([
           'banner_title' => $request->ban_tit_get_val,
           'banner_description' => $request->ban_desc_get_val,
        ]);
        Session::put('message', 'Banner updated successfully');
        return back();
    }
    public function deleteBanner(Request $request) {
        if(!Storage::delete(substr($request->banner_image_url, -22))) {
            Session::put('message', 'Sorry! try again later');
            return back();  
        } else {
        DB::table('banner')->where('id', (string)$request->id)->delete();
        Session::put('message', 'Banner deleted successfully');
            return back();  
        }
        
    }
}
