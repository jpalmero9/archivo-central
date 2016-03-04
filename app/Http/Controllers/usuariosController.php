<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\usuarios;


/*Agregar para soporte de Session y redirect*/
use Session;
use Redirect;
use App\Auth;
/*importar reques personal JP para validacion*/
use App\Http\Requests\usuarioRequest;
use App\Http\Requests\loginRequest;


class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $usuarios=usuarios::paginate(6);
         return view('usuarios.usuarios', compact('usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.crearUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuarioRequest $request)
    {
        //

        usuarios::create([

          'nombreUsuario' => $request['nombreUsuario'],
          'claveUsuario'=> bcrypt($request['claveUsuario']), 
          'identNombre'=> $request['identNombre'] ,
          'identApellido'=> $request['identApellido'],
          'email'=> $request['email'] ,
          'categoria' => $request['categoria'],

            ]);

        Session::flash('message','Registro exitoso!!');
        return Redirect::to('/usuarios');
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
    public function edit($id_usuario)
    {
        //

        $usuarios = usuarios::find($id_usuario);
        return view('usuarios.editarUsuario',['usuarios' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(usuarioRequest $request, $id_usuario)
    {
        //
        $usuario =usuarios::find($id_usuario);
        $usuario->fill($request->all());
        $usuario->save();

        Session::flash('message','Registro actualizado!!');
        return Redirect::to('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        //

        ficha::destroy($id_usuario);

        Session::flash('message','Registro eliminado!!');
        return Redirect::to('/usuarios');


    }
}
