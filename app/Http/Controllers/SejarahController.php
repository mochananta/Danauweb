<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.sejarah.view_sejarah', compact('sejarah'));
    }

    public function Sejarah()
    {
        $sejarahs = Sejarah::all();
        return view('user.about', compact('sejarahs'));
    }

    public function create()
    {
        return view('admin.sejarah.add_sejarah');
    }

    public function store(Request $request)
    {
        $sejarah = new Sejarah();
        $sejarah->deskripsi = $request->deskripsi;
        $sejarah->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('sejarah.view');
    }

    public function edit(string $id)
    {
        $editData = sejarah::Find($id);
        return view('admin.sejarah.edit_sejarah', compact('editData'));
    }

    public function update(Request $request, string $id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->deskripsi = $request->deskripsi;
        $sejarah->update();
        return redirect()->route('sejarah.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function destroy(string $id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->delete();
        return redirect()->route('sejarah.view');
    }
}
