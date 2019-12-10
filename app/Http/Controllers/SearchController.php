<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class SearchController extends Controller
{
    public function Search(){
        return view('Search'); 
    }



	function action(Request $request){
		if($request->ajax()){
		    $output = '';
		    $query = $request->get('query');
		    if($query != ''){
		        $data = Post::where('title','LIKE',"%$query%")->get();
		    }
		    $total_row = $data->count();
		    if($total_row > 0){
		        foreach($data as $row){
		            //$output .= '<tr><td>'.$row->title.'</td></tr>';
		            $output .='<li><a href="'.url('singlePost/'.$row->slug).'">'.$row->title.'</a></li>';
		        }
		    }
		    else {
		        $output .= '<tr><td>No Data Found</td></tr>';
		    }
		    $data = array(
		        'table_data'  => $output,
		        'total_data'  => $total_row
		    );
		    return response()->json($output);
        }
    }
}
