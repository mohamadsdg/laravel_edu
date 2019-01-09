<?php

namespace App\Http\Controllers;

class pagesController extends Controller
{
    public function home()
    {
        $people = ['mohamad', 'sina', 'ali'];
        return view('cont', compact('people'));
    }
    public function about()
    {
        $people = ['S', 'A', 'M'];
        return view('about', compact('people'));
    }
}
