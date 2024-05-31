@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Detail Data Kasir</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama_kasir" value="{{ $kasir->nama_kasir }}" disabled>
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" value="{{ $kasir->jenis_kelamin }}" disabled>
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $kasir->alamat }}" disabled>
                                <label class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="no_telepon" value="{{ $kasir->no_telepon }}" disabled>

                            </div>
                                <a href="{{url('kasir')}}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
