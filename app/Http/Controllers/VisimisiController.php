<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visimisi;
use RealRashid\SweetAlert\Facades\Alert;


class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.visimisi.view_visimisi', compact('visimisi'));
    }

    public function Visimisi()
    {
        $visimisis = Visimisi::all();
        return view('user.about', compact('visimisis'));
    }

    public function create()
    {
        return view('admin.visimisi.add_visimisi');
    }

    public function store(Request $request)
    {
        $visimisi = new Visimisi();
        $visimisi->desvisimisi = $request->desvisimisi;
        $visimisi->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('visimisi.view');
    }

    public function edit(string $id)
    {
        $editData = Visimisi::Find($id);
        return view('admin.visimisi.edit_visimisi', compact('editData'));
    }

    public function update(Request $request, string $id)
    {
        $visimisi = Visimisi::find($id);
        $visimisi->desvisimisi = $request->desvisimisi;
        $visimisi->update();
        return redirect()->route('visimisi.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function destroy(string $id)
    {
        $visimisi = Visimisi::find($id);
        $visimisi->delete();
        return redirect()->route('visimisi.view');
    }
}
