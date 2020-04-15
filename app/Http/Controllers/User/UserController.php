<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function UserLogin()

    {

        return view('user.userlogin');

    }
    public function Login(Request $request)
          {             
        $input = $request->all();

        $this->validate($request, [

            'email' => 'unique:users|required|email|string',

            'password' => 'required |min:6 | string',

        ]);


        return view  ('user.userHome');

          }

}
