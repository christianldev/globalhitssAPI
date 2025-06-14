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
            'primerApellido' => 'required|string',
            'idDepartamento' => 'required|integer',
            'idCargo' => 'required|integer',
        ];
    }
}
