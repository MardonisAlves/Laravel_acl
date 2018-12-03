<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use App\Notices;
use App\Permission;
use App\Role;
class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $totalUser =  User::count();
        $totalNotices =  Notices::count();
        $totalPermission= Permission::count();
        $totalRole = Role::count();
        return view('Painel.home.index' , 
                    compact(
                        'totalUser' , 
                        'totalNotices', 
                        'totalPermission',
                        'totalRole'));
    }
}
