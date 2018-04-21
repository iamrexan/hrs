<?php

namespace HRS\Http\Controllers;

use Illuminate\Http\Request;

use HRS\Http\Requests;
use HRS\newsEvents;
use App;
use DB;
use Session;

class newsEventsController extends Controller
{
    public function __contruct() {
        $this-middleware('auth');
    }
    public function storeHomeNewsEvents(Request $request) {
        if(empty($request->editordata)) {
            Session::put('message', 'Sorry! The field should not empty');
            return back();    
        } else {
            $newsevent = new newsEvents;
            $newsevent->created_by = $request->created_by;
            $newsevent->newsOrEvents = $request->editordata;
            $newsevent->updateOrCreate(
                    ['created_by' => $request->created_by],
                    ['newsOrEvents' => $request->editordata]
                    );
            Session::put('message', 'News Updated successfully');
            return back();    
        }
    }
}
