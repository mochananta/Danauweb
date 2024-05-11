<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userview()
    {
        $data = Kegiatan::all();
        return view('user.index', compact('data'));   
        @dd($data); 
    }

    //Halaman FAQ View
    public function aboutview()
    {
        return view('user.about');
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
