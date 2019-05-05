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
       if(isset($request->checky))
       {
           if(Auth::attempt($credenciales))
           return redirect('/home')->cookie('nombre', $request->usuario, 10080);
       }
       else{
            if(Auth::attempt($credenciales))
          {  return redirect('/home');}
          else{
            return redirect('/login');
          }
       }
     
    }
   
    public function cook(Request $request){
        
            $cookies = $request->cookie('nombre');
            return view('login',['nombre'=>$cookies]);
       
     }
}
