<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use DB;

class DropeeController extends Controller
{
    public function index(){

    	$rows = DB::select('select * from page');

    	return view('index')->with('rows', $rows);
    }

    public function update(Request $request, $id){

        $title = $request['updatedContent'];
        $color = $request['color'];

        $affected = DB::table('page')
              ->where('page_id', $id)
              ->update(['page_title' => $title,
                        'page_color' => $color
                    ]);
    }
}
