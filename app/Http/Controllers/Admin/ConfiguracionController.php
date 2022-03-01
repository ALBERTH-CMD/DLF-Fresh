<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configuracion;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConfiguracionController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.configuracion.index')->only('index');
        $this->middleware('can:admin.configuracion.update')->only('update');
    }

    public function index(){
        $registro = Configuracion::find(1);
        return view("admin.configuracion.index",compact('registro'));
    }

    public function update(Request $r,$id){
        $registro = Configuracion::findOrFail($id);
        $registro->fill($r->all());

        $logo_anterior      = $registro->urllogo;
        $favicon_anterior   = $registro->urlfavicon;
        $foto_anterior      = $registro->seo_urlfoto;

        if($r->hasFile('seo_urlfoto')){

            $rutaAnterior = public_path('img/configuracion/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $r->file('seo_urlfoto');
            $nuevonombre = Str::slug($r->razonsocial).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(850,null,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('img/configuracion/'.$nuevonombre));

            $registro->seo_urlfoto = $nuevonombre;
        }

        if($r->hasFile('urlfavicon')){

            $rutaAnterior = public_path('img/configuracion/'.$favicon_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $r->file('urlfavicon');
            $nuevonombre = Str::slug($r->razonsocial).'_favicon.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(16,null,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('img/configuracion/'.$nuevonombre));

            $registro->urlfavicon = $nuevonombre;
        }

        if($r->hasFile('urllogo')){

            $rutaAnterior = public_path('img/configuracion/'.$logo_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $r->file('urllogo');
            $nuevonombre = Str::slug($r->razonsocial).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(200,null,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('img/configuracion/'.$nuevonombre));

            $registro->urllogo = $nuevonombre;
        }

        $registro->save();

        return redirect()->route('admin.configuracion.index');
    }
}
