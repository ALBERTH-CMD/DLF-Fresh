<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:admin.uploads.index')->only('index');
        $this->middleware('can:admin.uploads.create')->only('create');
        $this->middleware('can:admin.download')->only('download');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('admin.uploads.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function download($uuid)
    {
        $uploads = Upload::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path("app/Company/$uploads->title/" . $uploads->company_file);
        return response()->download($pathToFile);
        //return response()->file($pathToFile);
    }


    public function store(Request $request)
    {
        $uploads = Upload::create([
            'uuid' => (string) Str::orderedUuid(),
            'title' => $request->title,
        ]);
        if($request->hasFile('company_file'))
        {
            $file = $request->file('company_file')->getClientOriginalName();
            $request->file('company_file')
                ->storeAs('Company/' . $uploads->title, $file);
            $uploads->update(['company_file' => $file]);
        }
        return redirect()->route('admin.uploads.index',$uploads)->with('info','El Documento' .$uploads->title. 'ha sido creado con éxito');
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
    public function edit($id)
    {
        //dd($id);
        $uploads = Upload::where('id',$id)->first();
        //dd($uploads);
        return view('admin.uploads.edit', compact('uploads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request,Upload $uploads)
    {
        $uploads->update($request->only(['uuid','title']));

        if($request->hasFile('company_file'))
        {
            $file = $request->file('company_file')->getClientOriginalName();
            $request->file('company_file')
                ->storeAs('Company/' . $uploads->title, $file);
            if($uploads->company_file != '')
            {
                unlink(storage_path('app/Company/' . $uploads->title . '/' . $uploads->company_file));
            }
            $uploads->update(['company_file' => $file]);
        }
        return redirect()->route('admin.uploads.index',$uploads)->with('info','El Documento' .$uploads->title. 'ha sido Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Obtener el Archivo que se Quiere Eliminar
        $uploads = Upload::whereId($id)->firstOrFail();
        //Borrar del Storage - Almacenamiento
                unlink(storage_path('/app/Company/' . $uploads->title . '/' . $uploads->company_file));
            //$uploads->delete(['company_file' => $file]);

        //Borrar el Registro en la Base de Datos
        Upload::where('id', $id)->delete();
        //$uploads->delete();
        return redirect()->route('admin.uploads.index')->with('info','El Archivo ha sido eliminado correctamente');
    }
}
