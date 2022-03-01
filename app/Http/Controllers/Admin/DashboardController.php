<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = User::where('id', '<>', auth()->user()->id)->get();

        return view('admin.dashboard', compact('users'));
    }
}
