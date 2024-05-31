@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Edit Data Merk</b></div>
                    <div class="card-body">
                        <form action="{{ route('barang.update', $barang->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}">
                                <label class="form-label">Stok Barang</label>
                                <input type="text" class="form-control" name="stok_barang" value="{{ $barang->stok_barang }}">
                                <label class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" name="harga_barang" value="{{ $barang->harga_barang }}">
                                <label class="form-label">Nama Merk</label>
                                <select class="form-control" name="id_merk">
                                    @foreach ($merk as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Cover</label>
                                <input type="file" class="form-control" name="cover">
                            </div>
                                <a href="{{ url('barang')}}" class="btn btn-outline-primary">Back</a>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
