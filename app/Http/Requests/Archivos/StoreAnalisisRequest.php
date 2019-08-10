<?php
namespace App\Http\Requests\Archivos;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnalisisRequest extends FormRequest
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
            'name' => 'required',
            'laboratorio' => 'required',
            'preciopublico' => 'required',
            'costlab' => 'required',
         
         
        ];
    }
}
