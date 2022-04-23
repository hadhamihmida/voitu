<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Conducteur;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegisterUsers;


use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest');
        $this->middleware('guest:conducteur');
        $this->middleware('guest:client');
    }

    public function showConducteurRegisterForm()
    {
     return view('auth.registreD',['url' =>'conducteur']);
    }
    public function showClientRegisterForm()
    {
     return view('auth.registreC',['url' =>'client']);
    }

    public function createConducteur(Request $request){
        $request->validate([
            'nom'=>'required',
            'email'=>'required',
            'date_naissance'=>'required',
            'numero_telephone'=>'required',
            'image'=>'required',
            'cin'=>'required',
            'password'=>'required'
        ]);
        $conducteur = Conducteur::create([
            'nom' => $request['nom'],
            'email' => $request['email'],
            'date_naissance' => $request['date_naissance'],
            'numero_telephone' => $request['numero_telephone'],
            'cin' => $request['cin'],
            'image' => $request['image'],
            'password' => Hash::make($request['password']),

        ]);
        return redirect()->intended('login/conducteur');
    }

//client
public function createClient(Request $request){
    $request->validate([

    ]);
    $client = Client::create([
        'nom' => $request['nom'],
        'email' => $request['email'],
        'date_naissance' => $request['date_naissance'],
        'numero_telephone' => $request['numero_telephone'],
        'cin' => $request['cin'],
        'password' => Hash::make($request['password']),

    ]);
    return redirect()->intended('login/client');
}

}
