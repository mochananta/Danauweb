<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Promo;
use App\Models\Recentpost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function dashboard()
        {
            $jumlahBerita = Berita::count();
            $dataBerita = Berita::all();
        
            $jumlahKegiatan = Kegiatan::count(); 
            $dataKegiatan = Kegiatan::all(); 

            $jumlahPromo = Promo::count(); 
            $dataPromo = Promo::all(); 

            $jumlahPostingan = Recentpost::count();
            $dataPostingan = Recentpost::all();
        
            return view('admin.dashboard', compact('dataBerita', 'jumlahBerita', 'dataKegiatan', 'jumlahKegiatan', 'jumlahPromo', 'dataPromo', 'jumlahPostingan', 'dataPostingan'));
        }    
}
