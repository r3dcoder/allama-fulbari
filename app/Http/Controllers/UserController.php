<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Answer;

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

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->category = $request['category'];
        // $post->category = "MK";
        $post->user_id = Auth::id();
        $post->slug = \Str::slug($request->title);
        $post->save();
        $post->slug = \Str::slug($request->title." ".$post->id, '+');

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

        $request->validate([
            'title' => 'answer',
        ]);
              
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
