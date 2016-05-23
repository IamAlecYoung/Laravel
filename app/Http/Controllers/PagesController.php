<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
      return view("welcome");
    }

    public function about()
    {
          return view("about");
    }

    public function alec()
    {
          $people = ["Alec", "Taylor", "Vince"];
          return view("Alec", compact("people"));
    }
}
