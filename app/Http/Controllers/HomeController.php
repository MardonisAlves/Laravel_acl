<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notices;
use Gate;
use App\Permission;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notices $notice)
    {
 
        $notices =  Notices::all();
        //$notices = $notice->where('user_id', auth()->user()->id)->get();
        return view('home' ,  compact('notices'));
    
}

    public function update( Notices $notice ,$idPost)
    {
        $notice = Notices::find($idPost);
        $this->authorize('update' , $notice);
        //if( Gate:: denies('update',$notice)){

          //  abort(403, 'Unauthorized');

               return view('update-post',compact('notice'));
        
       //}
    }


    public function PermissionRole()
    {

        /*
        LISTA DE FUNÇÃO E PERMISSAO DO USERS
        */
    
       $name =  auth()->user()->name;
       echo "<h1>{$name}</h1>";

       foreach( auth()->user()->roles as $roles){
        echo "Função = " . $roles->name . "Id == " . $roles->id;
        echo "<br>";
        $permission =  $roles->permission;

        foreach($permission as $per){
           echo "Permissão = " . $per->name;
        }

        echo "<br>";

       }
    }
}

