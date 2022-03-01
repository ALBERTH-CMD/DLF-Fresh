<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proessa;
use App\Models\Upload;

class HomeController extends Controller
{
    public function index(){

        $cant_users = User::count();
        $cant_empresas = Proessa::count();
        $cant_uploads = Upload::count();

        return view('admin.index',compact('cant_users','cant_empresas','cant_uploads'));
    }
}
