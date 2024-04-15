<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GreetingController extends Controller
{
   public function greeting()
   {
    //return "Hi, welcome to my new website with Laravel!!";
      return view('greeting');
   }

   public function store(Request $request)
   {
        $user = new User();
        $user->name = $request->input('fabio');
        $user->email = $request->input('fabio.avila@sasf1.net');
        $user->password = bcrypt($request->input('fabio'));
        $user->save();
   }
}
