<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Promo;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Halaman FAQ View
    public function userview()
    {
        $promos = Promo::all();
        $kegiatans = Kegiatan::all();
        $beritas = Berita::take(3)->get();
        return view('user.index', compact('promos','beritas','kegiatans'));
    }

    //Halaman FAQ View
    public function aboutview()
    {
        return view('user.about');
    }

    public function kegiatan()
    {
        return view('user.detailkegiatan');
    }

    //Halaman ABOUT View
    public function faqview()
    {
        return view('user.faq');
    }

    public function teamview()
    {
        return view('user.team');
    }
}
