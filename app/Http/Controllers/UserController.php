<?php

namespace App\Http\Controllers;

use App\CivilState;
use App\Province;
use App\User;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Listar Administradores del sistema
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Para obtener registros de estado_civil y provincia
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $civil_state = CivilState::all();
        $departments  = Department::all();

        return view('user.create', [
            'civil_state' => $civil_state,
            'departments'    => $departments,
        ]);
    }

    /**
     * Almacena los registros de un nuevo administrador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        // dd($request->date_happy->date("Y")); //Prueba para verificar los datos del formulario

        $user = new User;

        $user->role_id        = 1;
        $user->civil_state_id = $request->civil_state;
        $user->province_id    = $request->province;

        $user->name       = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->ci         = $request->ci;
        $user->email      = $request->email;
        $user->gender     = $request->gender;
        $user->address    = $request->address;
        $user->mobil      = $request->mobil;
        $user->day        = date("d", strtotime($request->date_happy));
        $user->month      = date("m", strtotime($request->date_happy));
        $user->year       = date("Y", strtotime($request->date_happy));
        $user->password   = bcrypt($request->ci);

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
        $user = User::with('province')->findOrfail($id);
        //return $user;
        $civil_state = CivilState::all();
        $provinces    = Province::where('department_id',$user->province->department_id)->get();
        $departments  = Department::all();

        return view('user.editar', [
            'civil_state' => $civil_state,
            'departments'    => $departments,
            'user'        => $user,
            'provinces' => $provinces
            ]);
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

        $user->civil_state_id = $request->civil_state;
        $user->province_id    = $request->province;

        $user->name       = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->ci         = $request->ci;
        $user->email      = $request->email;
        $user->gender     = $request->gender;
        $user->address    = $request->address;
        $user->mobil      = $request->mobil;
        $user->day        = date("d", strtotime($request->date_happy));
        $user->month      = date("m", strtotime($request->date_happy));
        $user->year       = date("Y", strtotime($request->date_happy));

        $user->update();
        return redirect()->route('user.get');
    }

    /**
     * Cambiar estado del administrador.
     * URL: adminitrador/estado
     * Method: PUT
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        //findOrFail() Generacion de Pantallas de Error de Laravel
        $user = User::findOrFail($id);
        $user->state = ($user->state ? 0 : 1);
        $user->update();
        return redirect()->route('user.get');
    }

    public function searchProvince($id){
        $province = Province::where('department_id',$id)->get();
        return $province;
    }

    public function searchUser(Request $request){

        $users = User::orderBy('id', 'DESC')
            ->where('ci', 'LIKE', "%$request->buscar%")
            ->paginate(5);

        return view('user.index', [
            'users' => $users,
            'search' => $request->buscar,
        ]);
    }
}
