<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Answer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function newhome(){
        return view('newhome');
    }

    public function main(){
        return view('frontend.main');
    }
    public function allPost(){
        $posts = Post::where('category', "Biography(জীবনী)")->get();
        return view('allPost', compact('posts'));
    }
    public function singlePost($id){
        $post= Post::find($id);
        return view('singlePost', compact('post'));
    }
    
    public function life(){
        return view('single_post');
    }
    public function allQuestion(){
        $questions = Question::all();
        return view('questions', compact('questions'));
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
