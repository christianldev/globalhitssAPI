<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario' => 'required|string',
            'primerNombre' => 'required|string',
            'segundoNombre' => 'nullable|string',
            'primerApellido' => 'required|string',
            'segundoApellido' => 'nullable|string',
            'idDepartamento' => 'required|integer',
            'idCargo' => 'required|integer',
            'email' => 'required|email|unique:users,email',
        ];
    }
}
