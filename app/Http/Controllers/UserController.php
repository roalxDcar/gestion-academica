<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CivilState;
use App\Department;
use App\Province;
use DepartmentsTableSeeder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', [
            'users'=> $users
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $civil_state = CivilState::all();
        $province = Province::all();

        return view('user.create', [
            'civil_state' => $civil_state,
            'province' => $province
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->date_happy->date("Y")); //Prueba para verificar los datos del formulario

        $user = new User;

        $user->role_id = 1;
        $user->civil_state_id=$request->civil_state;
        $user->province_id=$request->province;

        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->ci = $request->ci;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->mobil = $request->mobil;
        $user->day = date("d", strtotime($request->date_happy));
        $user->month = date("m", strtotime($request->date_happy));
        $user->year = date("Y", strtotime($request->date_happy));
        $user->password = bcrypt($request->ci);

        $user->save();
        return redirect()->route('user.get');

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
        //findOrfail => Buscador de un dato especifico por id
        $user = User::findOrfail($id);

        $civil_state = CivilState::all();
        $province = Province::all();

        return view('user.editar', [
            'civil_state' => $civil_state,
            'province' => $province,
            'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);

        $user->civil_state_id=$request->civil_state;
        $user->province_id=$request->province;

        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->ci = $request->ci;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->mobil = $request->mobil;
        $user->day = date("d", strtotime($request->date_happy));
        $user->month = date("m", strtotime($request->date_happy));
        $user->year = date("Y", strtotime($request->date_happy));

        $user->update();
        return redirect()->route('user.get');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
