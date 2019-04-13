<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class loginController extends Controller
{
    //
    public function check(Request $request){
       $credenciales=[
        'email'=>$request->usuario,
        'password'=>$request->pass
       ];
     
      // Auth::attempt($credenciales);
       //zfhtqeu1xculgtjn
       if(Auth::attempt($credenciales))
       return redirect('/home');
     
    }
}
