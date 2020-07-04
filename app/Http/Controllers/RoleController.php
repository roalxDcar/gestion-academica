<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    /**
     * Metodo para mostrar los roles que se encuentran en la BD.
     * URL: /roles
     * Metodo: GET
     * Autor: Joss
     */
    public function index(){
        $roles = Role::paginate(5);
        return view('rol.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Almacenamiento de datos deesde formulario a la BD.
     * URL: /nuevo-rol/guardar
     * Metodo: POST
     * Autor: Joss
     */
    public function store(Request $request){
        $rol = new Role;
        $rol->description = $request->description;
        $rol->save();
        return redirect()->route('role.get');
    }
}
