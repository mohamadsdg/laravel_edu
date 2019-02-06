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
//        $this->middleware('admin');
        $this->middleware('auth');
//        $this->middleware('auth', ['only' => ['index']]); // set middleware for each method
//        $this->middleware('auth', ['except' => ['index']]); // unset middleware for each method
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
}
