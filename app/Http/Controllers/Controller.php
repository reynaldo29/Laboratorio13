<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    public function index()
    {
        $users = User::get();
        return view('rentas.index',compact('rentas'));
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('rentas.mostrar', ['users'=>$users]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
