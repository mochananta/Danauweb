<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Kegiatan;
=======
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Komentar;
use App\Models\Promo;
use App\Models\Subscribe;
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
use Illuminate\Http\Request;

class UserController extends Controller
{

<<<<<<< HEAD
    public function userview()
    {
        $data = Kegiatan::all();
        return view('user.index', compact('data'));   
        @dd($data); 
=======
    //Halaman FAQ View
    public function userview()
    {
        $promos = Promo::all();
        $kegiatans = Kegiatan::all();
        $beritas = Berita::take(3)->get();
        return view('user.index', compact('promos','beritas','kegiatans'));
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
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

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        Subscribe::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'Terima Kasih, Tunggu Informasi Selanjutnya');
    }

    public function store(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:beritas,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'teks' => 'required|string',
        ]);

        Komentar::create([
            'berita_id' => $request->berita_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'teks' => $request->teks,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}
