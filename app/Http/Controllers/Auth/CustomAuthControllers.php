<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Auth;
class CustomAuthControllers extends Controller
{


    public function index(){

        return view('customAuth.index');

    }

    public function adminlogin(){

        return view('Auth.admin');

    }

    public function chekadminlogin(Request $request){

    $this->validate($request,[
    'email'=>'required|email',
    'password'=>'required|min:6'

    ]);

    if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){

        return redirect()->intended('admin1');

    }

    return back()->withInput($request->only('email'));

        return view('Auth.admin.index');

    }

    public function admin(){

        return view('admin');

    }

    public function site(){

        return view('site');

    }
    //
}
