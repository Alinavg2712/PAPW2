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
      
        $idm=0;
        $idm=$request->main;
        $idr=0;
        $idr=$request->Idf;
        $idt=0;
        $idt=$idr-$idt;
          if(Auth::check())
                {         
               
                
                if($idt==0){
                    return redirect('/friends/'.$request->idr);
                }
                else
                {
                   
                    $nfriend = new amigo();
                    $nfriend->mainuser_id =  Auth::User()->id;
                    $nfriend->frienduser_id =$request->id;
                    $nfriend->accept=0;
                
                    $nfriend->save();
  
                     return redirect('/home');
                }
            }
    }
    
     public function showU($id){
  
            $solicitudes=amigo::where('frienduser_id',$id)
                            ->where('accept','=',0)
                            ->get();
          
            $amigos=amigo::where('accept','=',1)
                         ->get();
            
           $todo=amigo::where('mainuser_id',$id)
                         ->where('accept','=',1)
                       ->get();
                          
                        
            return view('friends',['th'=>$solicitudes,'rh'=>$amigos]);
            
     }
     public function friendA(Request $request){
       if(Auth::check())
       {
            if(isset($request->Add))
            {
                $friend=amigo::find($request->Idf);  
                $friend->accept=1;
                $friend->save();
                return redirect('/friends/'.$friend->mainuser_id);
            }
            if(isset($request->Dismiss))
            {
                $friend=amigo::find($request->Idf);  
                $friend->accept=0;
                $friend->delete();
                return redirect('/friends/'.$friend->mainuser_id);
              
            }       
        }
        else{
        return redirect('/login');
        }
        
        }
 
     /*
     public function showF($id){
  
        $friend=amigo::where('frienduser_id',$id)->firstOrFail();
        return view('friends',['th'=>$friend]);
     }*/
}
