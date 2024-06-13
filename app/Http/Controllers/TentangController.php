<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\Tentang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentang = Tentang::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.tentang.view_tentang', compact('tentang'));
    }

    public function Tentang()
    {
        $tentangs = Tentang::all();
        return view('user.about', compact('tentangs'));
    }

    public function create()
    {
        return view('admin.tentang.add_tentang');
    }

    public function store(Request $request)
    {
        $tentang = new Tentang();
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('tentang.view');
    }

    public function edit(string $id)
    {
        $editData = Tentang::Find($id);
        return view('admin.tentang.edit_tentang', compact('editData'));
    }

    public function update(Request $request, string $id)
    {
        $tentang = Tentang::find($id);
        $tentang->deskripsi = $request->deskripsi;
        $tentang->update();
        return redirect()->route('tentang.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function destroy(string $id)
    {
        $tentang = tentang::find($id);
        $tentang->delete();
        return redirect()->route('tentang.view');
    }
}
