<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*importar reques personal JP para validacion*/
use App\Http\Requests\diagnosticoValidaCrearRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*referenciamos nuestro modelo de datos*/
use App\diagnosticos;

/*Agregar para soporte de Session y redirect*/
use Session;
use Redirect;


class diagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $diagnosticos = diagnosticos::paginate(6);
        return view('diagnosticos.diagnosticos', compact('diagnosticos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('diagnosticos.creardiagnostico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(diagnosticoValidaCrearRequest $request)
    {
        //
        diagnosticos::create([

            'diagnostico'=> $request['diagnostico'],

            ]);

        Session::flash('message','Registro exitoso!!');
        return Redirect::to('/diagnosticos');

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
    public function edit($id_diagnostico)
    {
        //
        $diagnosticos = diagnosticos::find($id_diagnostico);
        return view('diagnosticos.editardiagnostico',['diagnosticos' => $diagnosticos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(diagnosticoValidaCrearRequest $request, $id_diagnostico)
    {
        //
        $diagnosticos =diagnosticos::find($id_diagnostico);
        $diagnosticos->fill($request->all());
        $diagnosticos->save();

        Session::flash('message','Registro actualizado!!');
        return Redirect::to('/diagnosticos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_diagnostico)
    {
        //
        diagnosticos::destroy($id_diagnostico);

        Session::flash('message','Registro eliminado!!');
        return Redirect::to('/diagnosticos');
    }
}
