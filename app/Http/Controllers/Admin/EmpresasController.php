<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proessa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proessas = Proessa::all();
        return view('admin.empresas.index', compact('proessas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proessas = new Proessa();
        $proessas -> name = $request->name;
        $proessas -> email = $request->email;
        $proessas -> celular = $request->celular;
        $proessas -> telefono = $request->telefono;
        $proessas -> direccion = $request->direccion;
        $proessas->save();

        return redirect()->route('admin.empresas.index',$proessas)->with('info','La Empresa se ha sido creado con éxito');
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

    public function edit($id)
    {
        //dd($proessas);
            //dd($id);
        $proessas = Proessa::where('id', $id)->first();
        //dd($proessas2);
        return view('admin.empresas.edit')->with(['proessas'=>$proessas]);
    }

    public function update(Request $request,$id)
    {
        //dd($id);
        $proessas=Proessa::findOrFail($id);
        $proessas->name = $request->name;
        $proessas->email = $request->email;
        $proessas->celular = $request->celular;
        $proessas->telefono = $request->telefono;
        $proessas->direccion = $request->direccion;

        $proessas->update($request->all());

        return redirect()->route('admin.empresas.index',$proessas)->with('info','La Empresa ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$proessa->delete();
        Proessa::where('id', $id)->delete();
        return redirect()->route('admin.empresas.index')->with('info','La Empresa ha sido eliminado correctamente');
    }
}
