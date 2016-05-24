<?php

namespace App\Http\Controllers;

//use DB;
use App\card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardController extends Controller
{
    //
    public function index()
    {
        //$cards = DB::table('cards')->get();
        $cards = card::all();

        return view('cards.index', compact('cards'));
    }

    public function show($id)//card $card)//
    {
      /*
        return $card;
        */
          $card = Card::find($id);
          return view('cards.show', compact('card'));
    }
}
