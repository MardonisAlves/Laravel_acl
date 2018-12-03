<?php

namespace App\Http\Controllers\Painel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }
    public function index()
    {
        $users = $this->user->all();
        return view('Painel.users.index' , compact('users'));

 
    }

    public function roles($id)
    {   //Recupara as Roles
        $user = $this->user->find($id);

        //Recupara as Permissions
        $roles = $user->roles()->get();
        return view('Painel.users.roles' , compact('user','roles'));
    }
}
