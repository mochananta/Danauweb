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
        $data->judulabout = $request->judulabout;
        if ($request->hasFile('potoabout')) {
            $poto_about = $request->file('potoabout')->store('potoabout');
            $data->potoabout = $poto_about;
        }
        $data->desabout = $request->desabout;
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
        if ($data->potoabout != null || $data->potoabout ='' ){
            Storage::delete($data->potoabout);
        }
        $data->delete();
        return redirect()->route('about.view');
    }
}
