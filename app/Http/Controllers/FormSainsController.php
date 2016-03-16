<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\SainsFormRequest;
use App\Sains;

class FormSainsController extends Controller
{
    public function simpan(SainsFormRequest $request){
      $slug = uniqid();
      $sains = new Sains(array(
        'namatim' => $request->get('namatim'),
        'nama1' => $request->get('nama1'),
        'nama2' => $request->get('nama2'),
        'sekolah' => $request->get('sekolah'),
        'jenjang' => $request->get('jenjang'),
        'kontak' => $request->get('kontak'),
        'email' => $request->get('email'),
        'slug' => $slug,
      ));

      $sains->save();

      return redirect('/ikutsains')->with('berhasil', 'Tim kamu telah terdaftar.'.' id kamu adalah '.$slug.' harap simpan id untuk konfirmasi pembayaran :)');
    }
}
