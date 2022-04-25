<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthentificatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:conducteur')->except('logout');
        $this->middleware('guest:client')->except('logout');

    }

    public function showConducteurLoginForm()
{
 return view('auth.loginD',['url' =>'conducteur']);
}
public function conducteurLogin(Request  $request)
{
    /*$this->validate($request, [
        'email' =>'required|email',
        'password' =>'required|min:6'

    ]);*/
    $request->validate([
        'email' =>'required|email',
        'password' =>'required|min:6'

    ]);
    if (Auth::guard('conducteur')->attempt(['email' => $request->email , 'password' => $request->password], $request->get('remember'))){
        return redirect()->intended('/trajet');
    }
    return back()->withInput($request->only('email','remember'));
}
//clients
public function showClientLoginForm(Request  $request)
{
    return view('auth.loginC',['url' =>'client']);
}
public function clientLogin(Request  $request)
{
    $request->validate([
        'email' =>'required|email',
        'password' =>'required|min:6'

    ]);
    if (Auth::guard('client')->attempt(['email' => $request->email , 'password' => $request->passwors], $request->get('remember'))){
        return redirect()->intended ('/client');
    }
    return back()->withInput($request->only('email','remember'));
}

}
