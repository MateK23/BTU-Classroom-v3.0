<?php

namespace App\Http\Controllers;

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
        # $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        $access = 2;
        return view('home', ["access" => $access]);
        # return View::make('home')->with('access', $access);
    }
}
