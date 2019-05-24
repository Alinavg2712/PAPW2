<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comic;
class SearchController extends Controller
{
    //
    public function lockOn(Request $request){
      if($request->gender==1)
      {        
            $user = User::where('name','LIKE','%'.$request->bar.'%')->orWhere('email','LIKE','%'.$request->bar.'%')->get();
                if(count($user) > 0)
                {
                     return view('search',['ch'=>$request->gender,'fu'=>$user])->withDetails($user)->withQuery ( $request->bar );
                }
                else 
                {
                    return view ('search',['ch'=>$request->gender,'fu'=>null])->withMessage('No Details found. Try to search again !');
                }
               /* return "Hello".$request->gender;*/
      }
      if($request->gender==2)
      {     
            $cmc = Comic::where('nombre','LIKE','%'.$request->bar.'%')
                        ->where('publicado',true)
                        ->get();
            if(count($cmc) > 0)
            {
                return view('search',['ch'=>$request->gender,'fu'=>$cmc])->withDetails($cmc)->withQuery ( $request->bar );

            }
            else{ 
                return view ('search',['ch'=>$request->gender,'fu'=>null])->withMessage('No Details found. Try to search again !');
            }
              
      }
      if($request->gender==0)
      {
          /*
                return view('home');*/
                return view ('search',['ch'=>$request->gender,'fu'=>null])->withMessage('No Details found. Try to search again !');
              
      }

   
 }

 public function load(Request $request){
      
        
        return view('search',['ch'=>$request->gender]);

}
}
