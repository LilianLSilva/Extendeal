<?php

namespace Modules\Cuadro\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCuadroRequest extends FormRequest
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
            'titulo' => 'required|min:3|max:45',
            'autor' => 'required|min:3|max:45',
            'medidas' => 'required|min:2|max:100',
            'tecnica' => 'required',
            'material' => 'required',
            'anio' => 'required|digits:4'
        ];
    }
}
