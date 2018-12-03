<?php

namespace App\Http\Controllers\Painel;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RoleController extends Controller
{
    private $role;
    public function __construct(Role $role)
    {
        $this->middleware('auth');
        $this->role = $role;
    }
    public function index()
    {
        $roles = $this->role->all();
        return view('Painel.roles.index' , compact('roles'));

 
    }

    public function permissions($id)
    {   //Recupara as Roles
        $role = $this->role->find($id);

        //Recupara as Permissions
        $permissions = $role->Permission()->get();
        return view('Painel.roles.permissions' , compact('role','permissions'));
    }
}
