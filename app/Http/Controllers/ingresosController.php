<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*importar reques personal JP para validacion*/
use App\Http\Requests\ingresoValidaCrearRequest;

/*referenciamos el modelo de datos */
use App\ingresos;

/*Agregar para soporte de Session y redirect*/
use Session;
use Redirect;



class ingresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ingresos = ingresos::paginate(6);
        return view('ingresos.ingresos', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('ingresos.crearingreso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ingresoValidaCrearRequest $request)
    {
        //
            ingresos::create([
            'ingreso'=> $request['ingreso'],
            ]);

        Session::flash('message','Registro exitoso!!');
        return Redirect::to('/ingresos');

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
    public function edit($id_ingreso)
    {
        //

        $ingresos = ingresos::find($id_ingreso);
        return view('ingresos.editaringreso',['ingresos' => $ingresos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ingresoValidaCrearRequest $request, $id_ingreso)
    {
        //
        $ingreso =ingresos::find($id_ingreso);
        $ingreso->fill($request->all());
        $ingreso->save();

        Session::flash('message','Registro actualizado!!');
        return Redirect::to('/ingresos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ingreso)
    {
        //
        ingresos::destroy($id_ingreso);

        Session::flash('message','Registro eliminado!!');
        return Redirect::to('/ingresos');
    }
}
