<?php

namespace App\Http\Controllers;

use App\Role;
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
        $roles = Role::paginate(5);
        return view('rol.index', [
            'roles' => $roles,
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
        return redirect()->route('role.get');
    }

    // public function storeRol(Request $request)
    // {
    //     $rol              = new Role;
    //     $rol->description = $request->description;
    //     $rol->save();
    //     $rol = Role::findOrFail($rol->role_id);
    //     $rol->grants()->attach($request->grants);
    //     return response()->json([
    //         'message' => 'registro almacendo con exito',
    //     ]);
    // }
    // public function getRole()
    // {
    //     $rol = Role::where('role_id', 14)->with('grants')->first();
    //     return response()->json(['rol' => $rol]);
    // }
}
