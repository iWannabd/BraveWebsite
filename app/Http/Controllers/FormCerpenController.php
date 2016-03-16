<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CerpenFormRequest;
use App\Cerpen;

class FormCerpenController extends Controller
{
    public function simpan(CerpenFormRequest $request)
    {
      $slug = uniqid();
      $cerpen = new Cerpen(array(
        'nama' => $request->get('nama'),
        'sekolah' => $request->get('sekolah'),
        'surel' => $request->get('surel'),
        'kontak' => $request->get('kontak'),
        'judul' => $request->get('judul'),
        'slug' => $slug,
      ));

      $fileName = $slug .'.'. $request->file('isicerpen')->getClientOriginalExtension();

      $request->file('isicerpen')->move(
        base_path() . '/public/cerpen', $fileName
      );

      $cerpen->save();

      return redirect('/ikutcerpen')->with('berhasil', 'Cerpen telah di submit.'.' id kamu adalah '.$slug.' harap simpan id untuk konfirmasi pembayaran :)');
    }
}
