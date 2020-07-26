<?php

namespace App\Http\Controllers;

use App\Role;
use App\Grant;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Metodo para mostrar los roles que se encuentran en la BD.
     * URL: /roles
     * Metodo: GET
     * Autor: Joss
     */
    public function index()
    {
        $roles = Role::orderBy('role_id', 'ASC')->paginate(5);
        return view('rol.index', [
            'roles' => $roles,
        ]);

    }

    /**
     * Metodo para Crear un nuevo rol
     *URL /
     *Metodo:
     *Autor: Joss
     */
    public function create()
    {
       /*  $rol = Role::where('role_id', 2)->with('grants')->first();
        return response()->json(['rol' => $rol]); */

        $grants = Grant::orderBy('grant_id', 'ASC')->get();
        return view('rol.create', [
            'grants' => $grants,
        ]);
    }

    /**
     * Almacenamiento de datos deesde formulario a la BD.
     * URL: /nuevo-rol/guardar
     * Metodo: POST
     * Autor: Joss
     */
    public function store(Request $request)
    {
        $rol              = new Role;
        $rol->description = $request->description;
        $rol->save();
        $rol = Role::findOrFail($rol->role_id);
        $rol->grants()->attach($request->grants);
        return redirect()->route('role.get');
    }

    // public function storeRol(Request $request)
    // {
    //     $rol              = new Role;
    //     $rol->description = $request->description;
    //     $rol->save();
    // $rol = Role::findOrFail($rol->role_id);
    // $rol->grants()->attach($request->grants);
    //     return response()->json([
    //         'message' => 'registro almacendo con exito',
    //     ]);
    // }
    // public function getRole()
    // {
    //     $rol = Role::where('role_id', 14)->with('grants')->first();
    //     return response()->json(['rol' => $rol]);
    // }

    /**
     * Metodo para editar el Formulario
     *
     *
     */
    public function edit($id)
    {
        $roles = Role::with('rol')->findOrFail($id);
        $grants = Grant::orderBy('grant_id', 'ASC')->get();
        //return response()->json(['role'=>$role]);
        //$role->grants()->attach($request->grants);
        $array[]=0;
        foreach($roles->rol as $role){
            $array[] = $role->grant_id;
        }
        return view('rol.editar', [
            'role' => $roles,
            'grants' => $grants,
            'array' => $array,
        ]);
    }

    /**
     *
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrfail($id);

        $role->description = $request->description;
        $role->update();
        $role = Role::findOrFail($role->role_id);
        $role->grants()->sync($request->grants);
        return redirect()->route('role.get');
    }

    /**
     * Cambiar estado del Roles.
     */
    public function state($id)
    {
        $role        = Role::findOrfail($id);
        $role->state = ($role->state ? 0 : 1);
        $role->update();
        return redirect()->route('role.get');
    }
}
