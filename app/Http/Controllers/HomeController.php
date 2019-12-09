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
    public function singlePost($slug){
        $post= Post::where('slug',$slug)->first();
        return view('singlePost', compact('post'));
    }
    
    public function life(){
        return view('single_post');
    }
    public function allQuestion(){
        $questions = Question::all();
        return view('questions', compact('questions'));
    }




   
    
    
}
