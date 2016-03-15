<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CerpenFormRequest extends Request
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
            //
            'nama' => 'required',
            'sekolah' => 'required',
            'surel' => 'required',
            'judul' => 'required',
            'isicerpen' => 'required|mimes:pdf',
            'isicerpen' => 'max:15000'
        ];
    }
}
