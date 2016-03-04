<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*importar reques personal JP para validacion*/
use App\Http\Requests\fichaValidaCrearRequest;
use App\Http\Requests\fichaValidaUpdateRequest;
/*referenciamos el modelo de datos*/
use App\ficha;

/*Agregar para soporte de Session y redirect*/
use Session;
use Redirect;



class fichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laficha = ficha::paginate(6);
        return view('fichas.ficha', compact('laficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fichas.crearfichas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(fichaValidaCrearRequest $request)
    {
        //
         ficha::create([
            'id_ingreso'=> $request['id_ingreso'],
            'id_diagnostico'=>$request['id_diagnostico'],
            'nro_historia'=>$request['nro_historia'],
            'ci_prefijo'=>$request['ci_prefijo'],
            'ci'=>$request['ci'],
            'fecha_Ingreso'=>$request['fecha_Ingreso'],
            'fecha_registro'=>$request['fecha_registro'],
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'ubicaion_fisica'=>$request['ubicaion_fisica'],
            'Observaciones'=>$request['Observaciones'],

           ]);

        Session::flash('message','Registro exitoso!!');
        return Redirect::to('/ficha');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ficha)
    {
        //
        $ficha = ficha::find($id_ficha);
        return view('fichas.editarficha',['ficha' => $ficha]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(fichaValidaUpdateRequest $request, $id_ficha)
    {
        //
        $ficha =ficha::find($id_ficha);
        $ficha->fill($request->all());
        $ficha->save();

        Session::flash('message','Registro actualizado!!');
        return Redirect::to('/ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ficha)
    {
        //
        ficha::destroy($id_ficha);

        Session::flash('message','Registro eliminado!!');
        return Redirect::to('/ficha');
    }
}
