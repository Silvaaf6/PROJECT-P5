@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Data Merk</b>
                        <a href="{{ route('merk.create') }}" class="btn btn-outline-primary float-end">Add Data</a>
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
                                    <th scope="col">Nama Merk</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($merk as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_merk }}</td>
                                        
                                        <form action="{{ route('merk.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('merk.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                                                <a href="{{ route('merk.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
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
