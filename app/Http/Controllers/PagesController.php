<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
      return view('master');
    }

    public function formcerpen(){
      return view('daftarcerpen');
    }

    public function formkartul(){
      return view('daftarkartul');
    }

    public function formsains(){
      return view('daftarsains');
    }
}
