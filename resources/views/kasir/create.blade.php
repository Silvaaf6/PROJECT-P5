@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Tambah Data Kasir</b></div>
                    <div class="card-body">
                        <form action="{{ route('kasir.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama_kasir">
                                <label class="form-label">Jenis Kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                                <label class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon">
                            </div>

                            <a href="{{ url('kasir') }}" class="btn btn-outline-primary">Back</a>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
