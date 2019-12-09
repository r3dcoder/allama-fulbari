<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // public function newPost(){

    // 	return view('createPost');
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function new_post(){
        return view('createPost');
    }
    
    public function ask_question(){
        return view('askQuestion');
    }
    
    
    public function new_post_post(Request $request){
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->category = $request['category'];
        // $post->category = "MK";
        $post->user_id = Auth::id();
        $post->slug = $request['title'];

        $post->save();
        return redirect('/home');
        
    }
    public function ask_question_post(Request $request){
        $post = new Question();
        $post->question = $request['content'];
        $post->category = $request['category'];
        // $post->category = "MK";
        $post->user_id = Auth::id();
        // $post->slug = $request['title'];
        $post->save();
        return redirect('/home');  
    }
    public function answer_submit(Request $request){
              
        $ans = new Answer();
        
        $ans->answer = $request->answer;
        $ans->question_id = $request['question_id'];
        $key= $request->key;
        $ans->user_id = Auth::id();
        $ans->save();
        $data = array(
            'date'=>$ans->created_at->format('j F, Y') ,
            'userName'=>$ans->user->name,
            'ans' => $ans
        );
            
        return response()->json($data);    
    }
}
