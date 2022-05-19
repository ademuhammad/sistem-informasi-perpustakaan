<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
      $title = 'Home';
        $databuku = Buku::all();
        return view('beranda',['buku' => $databuku,'title'=>$title]);
    }

    public function daftar() {
        $title = 'Daftar Buku';
        $databuku = Buku::all();
        return view('admin.index',['buku' => $databuku,'title'=>$title]);
    }

    public function about()
    {
        return view('info');
    }

 


}
