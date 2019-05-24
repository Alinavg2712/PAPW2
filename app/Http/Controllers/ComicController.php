<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Comic;
use App\ComicList;
use App\Comentario;
use App\Categoria;
use App\RoleUser;
use App\User;
use App\Likes;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
     
        $lescat=Categoria::select('id','nombre')
       // $lerole=Auth::User()->roles->first()
                        ->get(); 
        return view('add',['ch'=>$lescat]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
        
        if($request->file('img1')->isValid())
        {
            $media = $request->file('img1');
            $medianame= time().$media->getClientOriginalName();
            $media->move(public_path().'/img/', $medianame);
        }
    

        if($request->file('img2')->isValid())
        {
            $media2 = $request->file('img2');
            $medianame2= time().$media2->getClientOriginalName();
            $media2->move(public_path().'/img/', $medianame2);
        
        }
        if($request->file('img3')->isValid())
        {
            $media3 = $request->file('img3');
            $medianame3= time().$media3->getClientOriginalName();
            $media3->move(public_path().'/img/', $medianame3);
        }
    

        if($request->file('img4')->isValid())
        {
            $media4 = $request->file('img4');
            $medianame4= time().$media4->getClientOriginalName();
            $media4->move(public_path().'/img/', $medianame4);
        
        }
        if($request->file('vid')->isValid())
        {
            $media5 = $request->file('vid');
            $medianame5= time().$media5->getClientOriginalName();
            $media5->move(public_path().'/img/', $medianame5);
        
        }
        $com=new Comic();
        $com->nombre=$request->name;
        $com->description=$request->description;
        $com->likes=0;
        $com->publicado=0;
        $com->pic1 = $medianame;
        $com->pic2 = $medianame2;
        $com->pic3 = $medianame3;
        $com->pic4 = $medianame4;
        $com->video = $medianame5;
        $com->user_id=$request->mainId;
        $com->cat_id=$request->category;
        $com->save();
    
       
      
        return redirect('/home');
    }
    else{
        return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showArt($id)//id del comic
    {
        //
      

        $lecomic=Comic::where('id',$id)->first();
        $lescomments=Comentario::where('comic_id',$id)
        ->orderBy('created_at', 'desc')
        ->get();
        if(Auth::check()){ 
        $likey=Likes::where('comic_id',$id)
                    ->where('user_id', Auth::User()->id)->count();
        }
        else
        {
            $likey=Likes::where('comic_id',$id)
            ->get();
        }
       // $lerole=Auth::User()->roles->first()
                       
      
                      
     
        return view('article',['th'=>$lecomic,'ch'=>$lescomments,'gh'=>$likey]);
      
    }
    public function editShow($id)//id del comic
    {
        //
      
     
        $lecomic=Comic::where('id',$id)->firstOrFail();
        $lescomments=Categoria::where('id',$lecomic->cat_id);
        $lescat=Categoria::select('id','nombre')
       // $lerole=Auth::User()->roles->first()
                        ->get(); 
        return view('edit',['th'=>$lecomic,'ch'=>$lescat,'gh'=>$lescat]);
    }
    public function showCom($id)//id del usuario
    {
        if(Auth::check())
        {
        $lescomics=ComicList::where('user_id',$id)
                            ->get();  
       
     
        return view('comics',['th'=>$lescomics]);
        //return redirect('/comics/'.Auth::user()->id,['th'=>$lescomics]);
        }
        else{
        return redirect('/login');
        }
    }
    public function comicAdd(Request $request){
        if(Auth::check())
        {
             if(isset($request->Add))
             {
                $lista=0;
                $id=0;
                $id=$request->Idf;
                if(Auth::check())
                {         $lista=ComicList::where('comic_id',$id)
                                        ->where('user_id',$request->Idu)
                                        ->count();}
               
                
                if($lista==0){
                        $lelist = new ComicList();
                        $lelist->user_id =  Auth::User()->id;
                        $lelist->comic_id =$request->Idf;
                    
                        $lelist->save();  
                        return redirect('/comics/'.$request->Idu);
                }
                else if ($lista>=1)
                {
                    return redirect('/comics/'.$request->Idu);
                }
           }
                   
        }
        
         else{
         return redirect('/login');
         }
         }
         public function comicEdit(Request $request){
            if(Auth::check())
            {   
              switch($request->Dismiss){
               case 'Change':{
                                $lecomic=Comic::where('id',$request->cmcId)->firstOrFail();
                                if($request->file('img1')->isValid())
                                {
                                    $media = $request->file('img1');
                                    $medianame= time().$media->getClientOriginalName();
                                    $media->move(public_path().'/img/', $medianame);
                                }
                            
                        
                                if($request->file('img2')->isValid())
                                {
                                    $media2 = $request->file('img2');
                                    $medianame2= time().$media2->getClientOriginalName();
                                    $media2->move(public_path().'/img/', $medianame2);
                                
                                }
                                if($request->file('img3')->isValid())
                                {
                                    $media3 = $request->file('img3');
                                    $medianame3= time().$media3->getClientOriginalName();
                                    $media3->move(public_path().'/img/', $medianame3);
                                }
                            
                        
                                if($request->file('img4')->isValid())
                                {
                                    $media4 = $request->file('img4');
                                    $medianame4= time().$media4->getClientOriginalName();
                                    $media4->move(public_path().'/img/', $medianame4);
                                
                                }
                                if($request->file('vid')->isValid())
                                {
                                    $media5 = $request->file('vid');
                                    $medianame5= time().$media5->getClientOriginalName();
                                    $media5->move(public_path().'/img/', $medianame5);
                                
                                }
                            
                                $lecomic->nombre=$request->name;
                                $lecomic->description=$request->description;
                                $lecomic->pic1 = $medianame;
                                $lecomic->pic2 = $medianame2;
                                $lecomic->pic3 = $medianame3;
                                $lecomic->pic4 = $medianame4;
                                $lecomic->video = $medianame5;
                                $lecomic->user_id=$request->mainId;
                                $lecomic->cat_id=$request->category;
                                if(isset($request->checkie))
                                {
                                    $lecomic->publicado=1;
                                }
                                else{
                                    $lecomic->publicado=0;
                                }
                                $lecomic->update();
                                return redirect('/article/'.$request->cmcId);
                            }
                            break;
           
           
                case 'Dismiss':
                {
                    $lecomic=Comic::where('id',$request->cmcId)->firstOrFail();
                    $lecomic->delete();
                    return redirect('/home');
                }
                break;
                default:{
                           return "Hello".$request->Dismiss;
                        }   
            }
            }
            
             else{
             return redirect('/login');
             }
             }
             public function comicLikes(Request $request){
                if(Auth::check()){
                            
                            switch($request->Like)
                            {
                                case 'Likes':
                                {
                                    Comic::where('id', $request->Idf)->increment('likes');
                                    $lik=new Likes();
                                    $lik->comic_id=$request->Idf;
                                    $lik->user_id=Auth::user()->id;
                                    $lik->save();
                                    return redirect('/article/'.$request->Idf);
                                }
                                break;
                               
                                case 'Dislike':
                                {
                                  
                                    Comic::where('id',$request->Idf)->decrement('likes');
                                              
                                   
                    
                                    $lik= Likes::where('user_id', Auth::user()->id)->first() ;
                                    $lik->delete();
                                    return redirect('/article/'.$request->Idf);
                                  
                                }
                                break;
                            
                            } 
                        }  
                        else{
                            return redirect('/login');
                            }
                    }    
                 
         public function ComicD(Request $request){
            if(Auth::check())
                {
                        
                        if(isset($request->Dismiss))
                        {
                           
                            $cmclist=ComicList::find($request->Idf);  
                            $cmclist->delete();
                            return redirect('/comics/'.Auth::user()->id);
                        
                        }       
                }
                        else{
                        return redirect('/login');
                        }
             }
             public function Home(Request $request){
             
                        $lescomics=Comic::where('publicado',true)
                        ->get();  
                        $topp=Comic::where('publicado',true)
                                     ->orderBy('likes', 'desc')->first();

                          
                            return view('/home',['th'=>$lescomics,'tp'=>$topp]);
              }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
