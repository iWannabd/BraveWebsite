<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CerpenFormRequest;
use App\Cerpen;

class PagesController extends Controller
{
    public function home(){
      return view('master');
    }

    public function simpan(CerpenFormRequest $request)
    {
      $slug = uniqid();
      $cerpen = new Cerpen(array(
        'nama' => $request->get('nama'),
        'sekolah' => $request->get('sekolah'),
        'surel' => $request->get('surel'),
        'judul' => $request->get('judul'),
      ));

      $fileName = $cerpen->nama . '_' . $cerpen->sekolah . '_' . $cerpen->judul . '.' .
        $request->file('isicerpen')->getClientOriginalExtension();

      $request->file('isicerpen')->move(
        base_path() . '/public/cerpen', $fileName
      );

      $cerpen->save();

      return redirect('/')->with('berhasil', 'Cerpen telah di submit.'.' id kamu adalah '.$cerpen->id.' harap simpan id untuk konfirmasi pembayaran :)');
    }
}
