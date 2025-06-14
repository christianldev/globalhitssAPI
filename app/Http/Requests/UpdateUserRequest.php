<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario' => 'sometimes|string',
            'primerNombre' => 'sometimes|string',
            'primerApellido' => 'sometimes|string',
            'idDepartamento' => 'sometimes|integer',
            'idCargo' => 'sometimes|integer',
        ];
    }
}
