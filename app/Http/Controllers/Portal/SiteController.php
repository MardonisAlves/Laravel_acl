<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notices;
use Gate;
use App\Permission;
use App\User;
class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Notices $notice)
{
    return view('Portal.home.index');
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

