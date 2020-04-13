<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AdminLogin()

    {

        return view('adminlogin');

    }

    public function Login(Request $request)
    {             
      $input = $request->all();

       $this->validate($request, [

      'email' => 'unique:users|required|email|string',

      'password' => 'required |min:6 | string',

  ]);


  return view  ('user.adminHome');

    }
}
