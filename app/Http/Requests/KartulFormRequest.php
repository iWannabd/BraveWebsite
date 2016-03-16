<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KartulFormRequest extends Request
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
            'namaketua' => 'required',
            'namaanggota1' => 'required',
            'namaanggota2' => 'required',
            'sekolah' => 'required',
            'surelketua' => 'required',
            'kontakketua' => 'required',
            'tema' => 'required',
            'karyatulis' => 'required|mimes:docx|max:5000',
        ];
    }
}
