<?php

namespace App\Http\Controllers;
use DB;


class cardsController extends Controller
{
    public function index()
    {
        $cards = DB::table('cards')->get(); /* use \DB(called quick and dirty way) instead of use DB in top of page*/
        return view('cards.index',compact('cards'));
    }
}
