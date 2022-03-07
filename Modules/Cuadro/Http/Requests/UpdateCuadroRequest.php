<?php

namespace Modules\Cuadro\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCuadroRequest extends FormRequest
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
            'titulo' => 'min:3|max:45',
            'autor' => 'min:3|max:45',
            'medidas' => 'min:2|max:100',
            'tecnica' => 'min:2|max:100',
            'material' => 'min:2|max:100',
            'anio' => 'min:2|max:100'
        ];
    }
}
