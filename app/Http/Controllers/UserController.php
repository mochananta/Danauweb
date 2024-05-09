<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Halaman FAQ View
    public function userview()
    {
        $promos = Promo::all();
        return view('user.index', compact('promos'));
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
