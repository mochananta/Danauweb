<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
=======
use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.about.view_about', compact('data'));
    }

<<<<<<< HEAD
    /**
     * Show the form for creating a new resource.
     */

    //  public function Promo()
    //  {
    //      $data = Promo::all();
    //      return view('user.index', compact('data'));
    //  }
=======
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
 

    public function create()
    {
        return view('admin.about.add_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $data = new About();
        $data->judulabout = $request->judulabout;
        if ($request->hasFile('potoabout')) {
            $poto_about = $request->file('potoabout')->store('potoabout');
            $data->potoabout = $poto_about;
        }
        $data->desabout = $request->desabout;
=======

        // validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // buat instance baru dari model about
        $data = new About();
        // set judul dari request
        $data->judul = $request->judul;
        // cek foto unggah ato tidak
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        } else {
            // Tetapkan nilai default atau tangani ketidakhadiran foto
            $data->foto = 'default.jpg'; // Pastikan nilai default ini ada atau dapat diterima
        }
        $data->deskripsi = $request->deskripsi;
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        $data->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('about.view');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = About::Find($id);
        return view('admin.about.edit_about', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = About::find($id);
<<<<<<< HEAD
        $data->judulabout = $request->judulabout;
        if ($request->hasFile('potoabout')) {
            $poto_about = $request->file('potoabout')->store('potoabout');
            $data->potoabout = $poto_about;
        }
        $data->desabout = $request->desabout;
=======
        $data->judul = $request->judul;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        }
        $data->deskripsi = $request->deskripsi;
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        $data->update();
        return redirect()->route('about.view')->with('Success', 'Update Data Berhasil!!');
    }

    // public function PromoShow(string $id)
    // {
    //     $data = Promo::find($id);
    //     return view('user.index', compact('data'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::find($id);
<<<<<<< HEAD
        if ($data->potoabout != null || $data->potoabout ='' ){
            Storage::delete($data->potoabout);
=======
        if ($data->foto != null || $data->foto ='' ){
            Storage::delete($data->foto);
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        }
        $data->delete();
        return redirect()->route('about.view');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
