<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\KartulFormRequest;
use App\Kartul;

class FormKartulController extends Controller
{
    public function simpan(KartulFormRequest $request){
      $slug = uniqid();
      $kartul = new Kartul(array(
        'namaketua' => $request->get('namaketua'),
        'namaanggota1' => $request->get('namaanggota1'),
        'namaanggota2' => $request->get('namaanggota2'),
        'sekolah' => $request->get('sekolah'),
        'surelketua' => $request->get('surelketua'),
        'kontakketua' => $request->get('kontakketua'),
        'tema' => $request->get('tema'),
        'slug' => $slug,
      ));


      $fileName = $slug .'.'.
       $request->file('karyatulis')->getClientOriginalExtension();

      $request->file('karyatulis')->move(
        base_path() . '/public/kartul', $fileName
     );

     $kartul->save();

     return redirect('/ikutkartul')->with('berhasil', 'Karya tulis telah di submit.'.' id kamu adalah '.$slug.' harap simpan id untuk konfirmasi pembayaran :)');

    }
}
