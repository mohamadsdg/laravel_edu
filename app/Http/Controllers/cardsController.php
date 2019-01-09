<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class cardsController extends Controller
{
    public function index()
    {
        $cards = DB::table('cards')->get();
        return view('cards.index',compact('cards'));
    }
}
