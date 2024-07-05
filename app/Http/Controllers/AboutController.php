<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

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

    /**
     * Show the form for creating a new resource.
     */

    //  public function Promo()
    //  {
    //      $data = Promo::all();
    //      return view('user.index', compact('data'));
    //  }


    public function create()
    {
        return view('admin.about.add_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // buat instance baru dari model about
        $data = new About();
        // set judul dari request
        $data->judul = $request->judul;
        // cek foto unggah atau tidak
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        } else {
            // Tetapkan nilai default atau tangani ketidakhadiran foto
            $data->foto = 'default.jpg'; // Pastikan nilai default ini ada atau dapat diterima
        }
        $data->deskripsi = $request->deskripsi;
<<<<<<< HEAD
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
=======
        $data->link = $request->link;
>>>>>>> ba3948f3ffd34a113b791333f6aba02d5b3b0de1
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
        $editData = About::find($id);
        return view('admin.about.edit_about', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari data About berdasarkan ID
        $data = About::find($id);
<<<<<<< HEAD
<<<<<<< HEAD
        $data->judulabout = $request->judulabout;
        if ($request->hasFile('potoabout')) {
            $poto_about = $request->file('potoabout')->store('potoabout');
            $data->potoabout = $poto_about;
        }
        $data->desabout = $request->desabout;
=======
=======

        // Periksa apakah data ditemukan
        if (!$data) {
            // Jika data tidak ditemukan, redirect dengan pesan error atau lakukan penanganan sesuai kebutuhan aplikasi
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        // Validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Set nilai judul dan deskripsi dari request
>>>>>>> ba3948f3ffd34a113b791333f6aba02d5b3b0de1
        $data->judul = $request->judul;
        
        // Periksa apakah ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($data->foto && $data->foto != 'default.jpg') {
                Storage::delete($data->foto);
            }
            // Simpan foto baru
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        }
<<<<<<< HEAD
        $data->deskripsi = $request->deskripsi;
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        $data->update();
        return redirect()->route('about.view')->with('Success', 'Update Data Berhasil!!');
    }
=======
>>>>>>> ba3948f3ffd34a113b791333f6aba02d5b3b0de1

        // Set deskripsi dari request
        $data->deskripsi = $request->deskripsi;
        $data->link = $request->link;

        // Simpan perubahan ke database
        $data->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('about.view')->with('success', 'Update data berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data About berdasarkan ID
        $data = About::find($id);
<<<<<<< HEAD
<<<<<<< HEAD
        if ($data->potoabout != null || $data->potoabout ='' ){
            Storage::delete($data->potoabout);
=======
        if ($data->foto != null || $data->foto ='' ){
=======

        // Periksa apakah data ditemukan
        if (!$data) {
            // Jika data tidak ditemukan, redirect dengan pesan error atau lakukan penanganan sesuai kebutuhan aplikasi
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        // Hapus foto dari storage jika ada
        if ($data->foto && $data->foto != 'default.jpg') {
>>>>>>> ba3948f3ffd34a113b791333f6aba02d5b3b0de1
            Storage::delete($data->foto);
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        }

        // Hapus data dari database
        $data->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('about.view')->with('success', 'Hapus data berhasil.');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
=======
}
>>>>>>> ba3948f3ffd34a113b791333f6aba02d5b3b0de1
