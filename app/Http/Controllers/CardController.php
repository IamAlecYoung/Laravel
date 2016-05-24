<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardController extends Controller
{
    //
    public function index()
    {
        $cards = DB::table('cards')->get();

        return view('cards.index', compact('cards'));
    }
}
