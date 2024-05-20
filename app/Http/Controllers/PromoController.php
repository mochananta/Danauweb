<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Promo::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.promo.view_promo', compact('data'));
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
        return view('admin.promo.add_promo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Promo();
        $data->temapromo = $request->temapromo;
        if ($request->hasFile('fotopromo')) {
            $foto_promo = $request->file('fotopromo')->store('fotopromo');
            $data->fotopromo = $foto_promo;
        }
        $data->despromo = $request->despromo;
        $data->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('promo.view');
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
        $editData = Promo::Find($id);
        return view('admin.promo.edit_promo', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Promo::find($id);
        $data->temapromo = $request->temapromo;
        if ($request->hasFile('fotopromo')) {
            $foto_promo = $request->file('fotopromo')->store('fotopromo');
            $data->fotopromo = $foto_promo;
        }
        $data->despromo = $request->despromo;
        $data->update();
        return redirect()->route('promo.view')->with('Success', 'Update Data Berhasil!!');
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
        $data = Promo::find($id);
        if ($data->fotopromo != null || $data->fotopromo = '') {
            Storage::delete($data->fotopromo);
        }
        $data->delete();
        return redirect()->route('promo.view');
    }
}
