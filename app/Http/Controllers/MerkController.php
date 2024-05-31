<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $merk = Merk::all();
        return view('merk.index', compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('merk.create', compact('merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $merk = new Merk;
        $merk->nama_merk = $request->nama_merk;

        //upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/merk', $name);
            $merk->cover = $name;
        }

        $merk->save();
        return redirect()->route('merk.index')->with('success', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merk = Merk::findOrFail($id);
        return view('merk.show', compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $barang = Barang::all();
        $merk = Merk::findOrFail($id);
        return view('merk.edit', compact('merk', 'merk'));

        $merk->save();
        return redirect()->route('merk.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $merk = Merk::findOrFail($id);
        $merk->nama_merk = $request->nama_merk;

//upload image
        // if ($request->hasFile('cover')) {
        //     $img = $request->file('cover');
        //     $name = rand(1000, 9999) . $img->getClientOriginalName();
        //     $img->move('images/merk', $name);
        //     $merk->cover = $name;
        // }
        $merk->save();
        return redirect()->route('merk.index')->with('success', 'Data Berhasil Dirubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = Merk::findOrFail($id);
        $merk->delete();
        return redirect()->route('merk.index')->with('success', 'Data Berhasil Dihapus!');

    }
}
