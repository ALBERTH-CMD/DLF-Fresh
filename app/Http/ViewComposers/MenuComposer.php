<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Configuracion;
use App\Models\Categoria;

class MenuComposer{

    public function compose(View $view){
        $config     = Configuracion::find(1);
        $submenu    = Categoria::all(['slug','nombre']);
        $view->with('config',$config)->with('submenu',$submenu);
    }
}
