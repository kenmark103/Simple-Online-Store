<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class adminauthController extends Controller
{
     use AuthenticatesUsers;

   protected $redirectTo = '/admindashboard';

     public function __construct(){

         $this->middleware('guest:admin')->except('adminLogout');
         $this->middleware('throttle:5,1');
     }

     public function showadminLoginForm()
     {
         return view('auth.adminlogin');

     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function login(Request $request)
      {
          //
          $this->validate($request, [
             'email' => 'required|email',
             'password' => 'required|string|min:5',
         ]);

         $details = $request->only('email', 'password');

         if (auth()->guard('admin')->attempt($details)) {
             return redirect()
             ->intended(route('admin.dashboard'));
         }
             return redirect()
             ->back()
             ->withInput($request->only('email','error'));
   }

     public function adminLogout()
     {
         Auth::guard('admin')->logout();
         return redirect('/');
     }
}
