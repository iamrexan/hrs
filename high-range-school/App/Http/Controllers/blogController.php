<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\blog;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination;

class blogController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('post-blog');
    }
    
    public function indexAllBlogs() {
        $blo = new blog;
        $count = count($blo->where('status', '1')->get());
        $blogs = DB::table('blogs');
        $blogs->where('status', '1')->paginate(5);
        //$blogs->setPath('admin-show-blog/limit');
        return view('all-blog', ['blogs' => $blogs, 'count' => $count]);
    }
    
    public function blog_update(Request $request) {
        if(!$request->id) {
        $rule = [
            'blog_title' => 'required|max:250',
            'blog_desc' => 'required'
        ];
        

        $this->validate($request, $rule);
        $blogs = new blog;
        $blogs->blog_title = $request->blog_title;
        $blogs->blog_description = $request->blog_desc;
        $blogs->created_by = Auth::user()->name;
        $blogs->status = '1';
        
        $blogs->created_date = Carbon::now()->toDateString();
        $blogs->updated_date = 0;
        $blogs->deleted_date = 0;
        $blogs->save();  
        //if(!$blogs->save()) {
            // print ('sorry something went wrong');
        Session::put('message', 'Created Scuccessfully');
        return redirect('admin-show-blog');
            
        } else {
                $rule = [
                'blog_title' => 'required|max:250',
                'blog_desc' => 'required'
            ];
        

        $this->validate($request, $rule);
        
        $blogs = new blog;
        $blogs->where('id', $request->id)->update([
            'blog_title' => $request->blog_title, 
            'blog_description' => $request->blog_desc, 
            'updated_date' => Carbon::now()->toDateString(),
            ]);      
        Session::put('message', 'Updated Scuccessfully');
        return redirect('admin-show-blog');
        }   
    }
    
    public function blog_delete(Request $request, $id) {
        if($id !== 0) {
            $blogs = new blog;
            $blogs->where('id', $id)->update(['status' => '0', 'deleted_date' => Carbon::now()->toDateString()]);
            return back();
        }
    }


    public function deletebulkblog(Request $request) {
        $blog = new blog;
        $arr = json_decode($request->delarray);
        
//        print_r($request->delarray);
        foreach($arr as $array) {
            $blog->where('id', $array)->update(['status' => '0', 'deleted_date' => Carbon::now()->toDateString()]);
        }
        Session::put('message', 'Deleted Scuccessfully');
        return back();
//        $blog->find($request->id);
    }
}
