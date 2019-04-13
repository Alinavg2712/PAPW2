<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\amigo;
class Friend extends Controller
{
    //
    public function eSolicitud(Request $request){
      
       
        $nfriend = new amigo();
        $nfriend->mainuser_id =  Auth::User()->id;
        $nfriend->frienduser_id =$request->id;
        $nfriend->accept=0;
     
        $nfriend->save();
      
        return redirect('/home');
        
      
    }
    
     public function showU($id){
  
            $solicitudes=amigo::where('mainuser_id',$id)
                            ->where('accept','=',0)
                            ->get();
          
            $amigos=amigo::where('mainuser_id',$id)
                           ->where('accept','=',1)
                         ->get();
            
           $todo=amigo::where('mainuser_id',$id)
                         ->where('accept','=',1)
                       ->get();
                          
                        
            return view('friends',['th'=>$solicitudes],['rh'=>$amigos]);
            
     }
  
 
     /*
     public function showF($id){
  
        $friend=amigo::where('frienduser_id',$id)->firstOrFail();
        return view('friends',['th'=>$friend]);
     }*/
}
