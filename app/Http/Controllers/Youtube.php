<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //
    function index(Request $request )
    {
      if($request->isMethod("get"))
      {
        echo $request->input('name');
        echo $request->input('lastname');

      }
    }

}
