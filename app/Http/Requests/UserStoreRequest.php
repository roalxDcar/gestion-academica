<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'ci' => 'required|unique:users,ci,'.$this->route('id').',id',
            'ci'          => 'required|unique:users',
            'name'        => 'required|alpha|min:3|max:30',
            'first_name'  => 'required|alpha|min:3|max:30',
            'last_name'   => 'required|alpha|min:3|max:30',
            'address'     => 'required|min:10|max:80',
            'email'       => 'required|email',
            'mobil'       => 'required|min:7|max:12',
            'date_happy'  => 'required|before_or_equal:' . date("d-m-Y", strtotime(date("d-m-Y") . "- 21 year")),
            'civil_state' => 'required',
            'department'  => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'              => 'El campo es requerido',
            'name.min'                   => 'El campo nombre debe ser mayor a 3 caracteres',
            'name.max'                   => 'El campo nombre no debe ser mayor a 30 caracteres',
            'name.alpha'                 => 'El campo nombre solo acepta cadena de texto',

            'first_name.required'        => 'El campo es requerido',
            'first_name.min'             => 'El campo ap. paterno debe ser mayor a 3 caracteres',
            'first_name.max'             => 'El campo ap. paterno no debe ser mayor a 30 caracteres',
            'first_name.alpha'           => 'El campo ap. paterno solo acepta cadena de texto',

            'last_name.required'         => 'El campo es requerido',
            'last_name.min'              => 'El campo ap. materno debe ser mayor a 3 caracteres',
            'last_name.max'              => 'El campo ap. materno no debe ser mayor a 30 caracteres',
            'last_name.alpha'            => 'El campo ap. materno solo acepta cadena de texto',

            'address.required'           => 'El campo es requerido',
            'address.min'                => 'El campo dirección debe ser mayor a 10 caracteres',
            'address.max'                => 'El campo dirección no debe ser mayor a 80 caracteres',

            'email.required'             => 'El campo es requerido',
            'email.email'                => 'Email ingresado no es valido',

            'ci.required'                => 'El campo es requerido',
            'ci.unique'                  => 'El C.I. ingresado ya existe',

            'date_happy.required'        => 'El campo es requerido',
            'date_happy.before_or_equal' => 'Fecha no valida',

            'mobil.required'             => 'El campo es requerido',
            'mobil.min'                  => 'El campo Telefono debe ser mayor a 7 caracteres',
            'mobil.max'                  => 'El campo Telefono no debe ser mayor a 12 caracteres',

            'civil_state.required'       => 'Seleccionar estado civil',
            'department.required'        => 'Seleccionar Departamento',

        ];
    }
}
