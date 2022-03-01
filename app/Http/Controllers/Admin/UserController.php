<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proessa;
use App\Models\Status;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit','update');
    }

    public function index()
    {
        //$user = User::all();
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = User::all();
        $proessas = Proessa::pluck('name','id');
        return view('admin.users.create',compact('status','proessas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->all();
        User::create([
            'name'=>$data['name'],
            'proessa_id'=>$data['proessa_id'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
            'status'=>$data['status'],

        ]);

        return redirect()->route('admin.users.index',$data)->with('info','El Usuario se ha sido creado con éxito');
    }


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
    public function edit(User $user)
    {
        $roles = Role::all();
        $proessas = Proessa::pluck('name','id');
        return view('admin.users.edit',compact('user','roles','proessas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $data=request()->only('name','email','status','proessa_id');
        $user->update($data);
        return redirect()->route('admin.users.edit',$user)->with('info','Se actualizó la información del usuario correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('info','El Usuario ha sido eliminado correctamente');
    }

}
