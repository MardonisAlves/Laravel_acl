<?php

namespace App\Http\Controllers\Painel;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PermissionController extends Controller
{
    private $permission;
    public function __construct(Permission $permission)
    {
        $this->middleware('auth');
        $this->permission = $permission;
    }
    public function index()
    {
        $permissions = $this->permission->all();
        return view('Painel.permission.index' , compact('permissions'));

 
    }

    public function roles($id)
    {   //Recupara as Roles
        $permission = $this->permission->find($id);

        //Recupara as Permissions
        $roles = $permission->roles()->get();
        return view('Painel.permission.roles' , compact('permission','roles'));
    }
}
