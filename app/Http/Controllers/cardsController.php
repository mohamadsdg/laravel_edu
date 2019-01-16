<?php

namespace App\Http\Controllers;
use DB;
use App\Card ;


class cardsController extends Controller
{
    public function index()
    {
        $cards = DB::table('cards')->get(); /* use \DB(called quick and dirty way) instead of use DB in top of page*/
        return view('cards.index',compact('cards'));
    }

    public function show(Card $card){ // when use route model binding pass model to method controller

        //$id
//        $card = Card::find($id);
        return view('cards.show',compact('card'));
    }
}
