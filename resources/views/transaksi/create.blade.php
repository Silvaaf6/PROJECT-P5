@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Tambah Data Transaksi</b></div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" name="tanggal_pembelian">
                                <label class="form-label">Nama Barang</label>
                                <select class="form-control" name="id_barang">
                                    @foreach ($barang as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Nama Kasir</label>
                                <select class="form-control" name="id_kasir">
                                    @foreach ($kasir as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kasir }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah">
                            </div>

                            <a href="{{ url('transaksi') }}" class="btn btn-outline-primary">Back</a>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
