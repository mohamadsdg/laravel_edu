<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        //        return $request->all(); // use notation variable
        //        return \Request::all(); // use notation class
        //        return request()->all();  // use notation method

        $note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);

//        return \Redirect::to('url');          // :: name scope resolution operator
//        return redirect()->to('url');     // -> associate class
//        return redirect('url');     // :|
         return back();     // just back url

    }
}
