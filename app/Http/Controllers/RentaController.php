<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renta;
class RentaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentas = Renta::get();
        return view('Rentas.index',compact('rentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rentas.create');
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

        $this->validate($request,[ 'email_user'=>'required', 'nombre'=>'required','fecha_registro'=>'required', 'fecha_devolucion'=>'required', 'fecha_entrega'=>'required']);
        Renta::create($request->all());
        return redirect()->route('Peliculas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rentas = Renta::where('email_user','like',"%$id%")->paginate();
        return view('Rentas.index',compact('rentas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rentas=Renta::find($id);
        return view('rentas.edit',compact('rentas'));
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
        $val=$_POST['email_user'];
        $this->validate($request,[ 'email_user'=>'required', 'nombre'=>'required','fecha_registro'=>'required', 'fecha_devolucion'=>'required', 'fecha_entrega'=>'required']);
        Renta::find($id)->update($request->all());
        return redirect()->route('Rentas.show',$val);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Renta::find($id)->delete();
        return redirect()->back();
    }
}
