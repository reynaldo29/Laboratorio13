<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membresia;

class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membresias = membresia::get();
        return view('Membresia.index',compact('membresias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Membresia.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'fecha_expedicion'=>'required', 'fecha_expiracion'=>'required','usuarioid'=>'required' ]);
        membresia::create($request->all());
        return redirect()->route('Membresias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membresias = membresia::where('usuarioid','like',"%$id%")->paginate();
        return view('membresia.index',compact('membresias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membresias=membresia::find($id);
        return view('membresia.edit',compact('membresias'));
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
        $val=$_POST['usuarioid'];
        $this->validate($request,[ 'fecha_expedicion'=>'required', 'fecha_expiracion'=>'required','usuarioid'=>'required' ]);
        membresia::find($id)->update($request->all());
        return redirect()->route('Membresias.show',$val);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        membresia::find($id)->delete();
        return redirect()->back();
    }
}
