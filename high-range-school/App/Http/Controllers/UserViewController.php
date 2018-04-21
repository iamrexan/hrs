<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\User;
use Auth;
use Illuminate\Pagination\Paginator;

class UserViewController extends Controller
{
    protected $redirectTo = '/';
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
    $user = new User;
    if(Auth::user()->alumni == 'admin') {
        $count = count($user->where('alumni', '!=', 'admin')->where('status', '1')->get());
    $user = User::where([
        ['alumni', '!=', 'admin'], 
        ['status', '=', '1'],
        ])->simplePaginate(10);
    return view('users', ['user' => $user, 'count' => $count]);
    } else {
        return 'Unautherized to access this page';
    }
    }
    
    public function changeOnAlumni(Request $request) {
        $user = new User;
        if($request->alumni == 'admin') {
            return 'error';
        } else {
            $user->where('id', $request->id)->update(['alumni' => $request->alumni]);
            $user = $user->where('id', $request->id)->get();
            echo json_encode($user);   
        }
    }
    
    public function bulkDel(Request $request) {
        $user = new User;
        $arr = count($request->arr);
        if($arr > 1) {
            foreach($request->arr as $arr_v) {
               $user->where('id', $request->arr)->update(['status' => 0]);
               echo $arr_v. "\n";
           } 
        } else {
            $user->where('id', $request->arr)->update(['status' => 0]);
            echo $arr. "\n";
        }
    }
}
