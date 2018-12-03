<?php

namespace App\Http\Controllers\Painel;
use App\Notices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class PostController extends Controller
{
    private $notice;
    public function __construct(Notices $notice)
    {
        $this->middleware('auth');
        $this->notice = $notice;
    }
    public function index()
    {
        $notices = $this->notice->all();

        if(Gate::denies('view',$notices)){
           
            return redirect()->back();
        }
        return view('Painel.posts.index' , compact('notices'));

 
    }
}
