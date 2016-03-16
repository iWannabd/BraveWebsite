<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SainsFormRequest extends Request
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
            'namatim' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'sekolah' => 'required',
            'jenjang' => 'required',
            'kontak' => 'required',
            'email' => 'required',
        ];
    }
}
