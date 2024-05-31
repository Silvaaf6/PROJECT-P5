@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Tambah Data Barang</b></div>
                    <div class="card-body">
                        <form action="{{ route('merk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Merk</label>
                                <input type="text" class="form-control" name="nama_merk">
                                    
                                </select>
                            </div>

                            <a href="{{ url('merk') }}" class="btn btn-outline-primary">Back</a>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
