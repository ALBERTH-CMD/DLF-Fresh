<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrucel;
use Intervention\Image\Facades\Image;

class CarruselController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.carrucel.index')->only('index');
        $this->middleware('can:admin.carrucel.create')->only('create', 'store');
        $this->middleware('can:admin.carrucel.edit')->only('edit', 'update');
        $this->middleware('can:admin.carrucel.destroy')->only('destroy');
    }

    public function index(){
        $carrusels = Carrucel::all();
        return view("admin.carrucel.index",compact('carrusels'));
    }
    public function create(){
        return view('admin.carrucel.create');
    }
    public function store(Request $request){

        $carrusel = new Carrucel($request->all());

        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = 'artesanias_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/carrusel/'.$nuevonombre));

            $carrusel->urlfoto = $nuevonombre;
        }
        $carrusel->save();
        return redirect('/admin/carrucel');

    }
    public function update(Request $request,$id){

        $carrusel = carrucel::findOrFail($id);
        $carrusel->fill($request->all());
        $foto_anterior     = $carrusel->urlfoto;


        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/carrusel/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');

            $nuevonombre = 'artesanias_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/carrusel/'.$nuevonombre));

            $carrusel->urlfoto = $nuevonombre;
        }

        $carrusel->save();
        return redirect('/admin/carrucel');
    }

    public function edit($id){
        $carrusel = carrucel::findOrFail($id);
        return view('admin.carrucel.edit',compact('carrusel'));
    }

    public function destroy($id){
        $carrusel = carrucel::findOrFail($id);
        $borrar = public_path('/img/carrusel/'.$carrusel->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }
        $carrusel->delete();
        return redirect('/admin/carrucel');
    }
}
