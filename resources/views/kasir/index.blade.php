@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Data Kasir</b>
                        <a href="{{ route('kasir.create') }}" class="btn btn-outline-primary float-end" >Add Data</a>
                    </div>

                    <div class="card-body" style="background-color: #F5F5DC;">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kasir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kasir as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_kasir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_telepon }}</td>
                                        
                                        <form action="{{ route('kasir.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('kasir.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('kasir.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"  onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                                                    Delete
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
