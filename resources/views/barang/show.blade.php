@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Detail Data Barang</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}" disabled>
                                <label class="form-label">Stok Barang</label>
                                <input type="text" class="form-control" name="stok_barang" value="{{ $barang->stok_barang }}" disabled>
                                <label class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" name="harga_barang" value="{{ $barang->harga_barang }}" disabled>
                                <label class="form-label">Nama Merk</label>
                                <input type="text" class="form-control" name="id_merk" value="{{ $barang->merk->nama_merk }}" disabled>
                                <label class="form-label">Cover</label>
                                <img src="{{ asset('/images/barang/' . $barang->cover) }}" width="100">
                            </div>
                                <a href="{{url('barang')}}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
