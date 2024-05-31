@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Detail Data Transaksi</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" name="tanggal_pembelian" value="{{ $transaksi->tanggal_pembelian }}" disabled>
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="id_barang" value="{{ $transaksi->barang->nama_barang }}" disabled>
                                <label class="form-label">Nama Kasir</label>
                                <input type="text" class="form-control" name="id_kasir" value="{{ $transaksi->kasir->nama_kasir }}" disabled>
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled>
                            </div>
                                <a href="{{url('transaksi')}}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
