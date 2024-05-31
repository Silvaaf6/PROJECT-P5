@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Edit Data Merk</b></div>
                    <div class="card-body">
                        <form action="{{ route('kasir.update', $kasir->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama_kasir" value="{{ $kasir->nama_kasir }}">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki 
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $kasir->alamat }}">
                                <label class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon" value="{{ $kasir->no_telepon }}">
                                
                            </div>
                                <a href="{{ url('kasir') }}" class="btn btn-outline-primary">Back</a>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
