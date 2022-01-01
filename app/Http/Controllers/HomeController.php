<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::paginate(5);

        $user = User::all();
  
        // return $posts;
        // exit();
        return view('home' , ['posts'  =>$posts , 'user' => $user]);
    }
}
