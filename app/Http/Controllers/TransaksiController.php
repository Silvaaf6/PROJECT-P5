<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
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
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $kasir = Kasir::all();
        $transaksi = Transaksi::all();
        return view('transaksi.create', compact('transaksi', 'barang', 'kasir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->tanggal_pembelian = $request->tanggal_pembelian;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_kasir = $request->id_kasir;
        $transaksi->jumlah = $request->jumlah;

        $barang = Barang::findOrFail($transaksi->id_barang);

        $transaksi->total = $transaksi->jumlah * $barang->harga_barang;
        $barang->stok_barang -= $request->jumlah;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::all();
        $kasir = Kasir::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi', 'barang', 'kasir'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = new Transaksi;
        $transaksi->tanggal_pembelian = $request->tanggal_pembelian;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_kasir = $request->id_kasir;
        $transaksi->jumlah = $request->jumlah;

        // manggil harga barang

        $barang = Barang::findOrFail($transaksi->id_barang);
        $transaksi->total = $transaksi->jumlah * $barang->harga_barang;
        $barang->stok_barang -= $request->jumlah;

//upload image
// if ($request->hasFile('cover')) {
//     $img = $request->file('cover');
//     $name = rand(1000, 9999) . $img->getClientOriginalName();
//     $img->move('images/transaksi', $name);
//     $transaksi->cover = $name;
// }
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Dirubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Dihapus!');

    }
}
