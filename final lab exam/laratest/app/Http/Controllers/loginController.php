<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
   {
   	return view('login.index');
   }
   public function varify()
   {
   	return redirect('/home');
   }
}
