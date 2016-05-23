<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
      $people = ["Alec", "Taylor", "Vince"];
      return view('Alec', compact('people'));
    }

    public function about()
    {
          return view("about");
    }
}
