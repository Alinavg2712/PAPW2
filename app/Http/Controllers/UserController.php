<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Categoria;
use App\User;
use App\Role;
use App\ComicList;
use App\amigo;
use App\Comic;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *///mostrar todo
    public function index()
    {
        //
        return "Hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *///crear registro
    public function create()
    {
        //
        return view('register');
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
      /*
        $cat=new Categoria();
        $cat->nombre=$request->name;
        $cat->save();
        return "Hello ".$request->name;
        */
        if($request->file('profile')->isValid())
        {
            $media = $request->file('profile');
            $medianame= time().$media->getClientOriginalName();
            $media->move(public_path().'/img/', $medianame);
        }
    

        if($request->file('picture')->isValid())
        {
            $media2 = $request->file('picture');
            $medianame2= time().$media2->getClientOriginalName();
            $media2->move(public_path().'/img/', $medianame2);
        
        }
        $nuser = new User();
        $nuser->name = $request->name;
        $nuser->email =$request->email;
        $nuser->password = Hash::make( $request->password);
        $nuser->slug =  $request->username;
        $nuser->phone =  $request->phone;
        $nuser->address =$request->address ;
        $nuser->pic1 =   $medianame ;
        $nuser->pic2 =   $medianame2;
        $nuser->pic3 = 'img3';
        $nuser->pic4 = 'img4';
        $nuser->video = 'video';
        $nuser->save();
        $nuser->roles()->attach(Role::where('name','user')->first());
      
        return redirect('/login');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
        $usuario=User::where('id',$id)->first();
                     
        $todo=amigo::where('accept','=',1);
                   
                  
        $listcomics=ComicList::where('user_id',$id)
                            ->get();
    
        return view('profile',['th'=>$usuario,'qh'=>$listcomics]);
     
    }
    public function showUs($id)
    {
        //
      
        $usuario=User::where('id',$id)->first();
                     
        $todo=amigo::where('accept','=',1)
                    ->get();
                               
        $lesrecs=ComicList::select('id','comic_id','user_id')
                     ->inRandomOrder()
                    ->take(3)
                    ->get();

        $lespublic=Comic::where('publicado',true)
                    ->get();
        $notpublic=Comic::where('publicado',false)
                    ->get();

              
        return view('profile',['th'=>$usuario,'qh'=>$todo, 'ph'=>$lesrecs,'pb'=>$lespublic,'npb'=>$notpublic]);
     
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
