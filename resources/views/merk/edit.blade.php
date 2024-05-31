@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Edit Data Merk</b></div>
                    <div class="card-body">
                        <form action="{{ route('merk.update', $merk->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Merk</label>
                                <input type="text" class="form-control" name="nama_merk" value="{{ $merk->nama_merk }}">
                            </div>
                                <a href="{{ url('merk') }}" class="btn btn-outline-primary">Back</a>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
