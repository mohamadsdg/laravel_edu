<?php

namespace App\Http\Controllers;

use DB;
use App\Card;


class cardsController extends Controller
{
    public function index()
    {
        $cards = DB::table('cards')->get(); /* use \DB(called quick and dirty way) instead of use DB in top of page*/
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    { // when use route model binding pass model to method controller

        //$id
//        $card = Card::findOrFail($id);
//        return Card::with('notes.user')->get(); // tips -> Card:: use called statically ******
//          return Card::with('notes.user')->find(1); //eager Loading
//          return $card ->load('notes.user'); //eager Loading same ==> return Card::with('notes.user')->find(1) but dynamic find fuck
        $card->load('notes.user'); // dynamic find because instance $card (fuuuuuuuuck)
        $tag->all();

        return view('cards.show', compact('card', 'tag'));
    }
}
