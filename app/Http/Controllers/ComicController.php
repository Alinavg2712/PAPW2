<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comic;
use App\ComicList;
use App\Comentario;
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
        return view('add');
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
        $com=new Comic();
        $com->nombre=$request->name;
        $com->description=$request->description;
        $com->likes=0;
        $com->publicado=0;
        $com->pic1 = $medianame;
        $com->pic2 = $medianame2;
        $com->pic3 = $medianame3;
        $com->pic4 = $medianame4;
        $com->video = 'video';
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
        $lecomic=Comic::where('id',$id)->firstOrFail();
        $lescomments=Comentario::where('comic_id',$id)
        ->get(); 
        return view('article',['th'=>$lecomic],['ch'=>$lescomments]);
      
    }
    public function showCom($id)//id del usuario
    {
        if(Auth::check())
        {
        $lescomics=ComicList::where('user_id',$id)
        ->get();  
       
     
        return view('comics',['th'=>$lescomics]);
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
                
                        $lelist = new ComicList();
                        $lelist->user_id =  Auth::User()->id;
                        $lelist->comic_id =$request->Idf;
                       
                        $lelist->save();
      
                 return redirect('/comics/'.$request->Idu);
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
                            $cmc=Comic::find($request->Idf);  
                            $cmc->delete();
                            $cmclist=ComicList::find($request->Idf);  
                            $cmclist->delete();
                            return redirect('/comics/'.Auth::user()->id);
                        
                        }       
                }
                        else{
                        return redirect('/login');
                        }
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
