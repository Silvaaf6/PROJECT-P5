@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #FAFAD2;"><b>Data Transaksi</b>
                        <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary float-end">Add Data</a>
                    </div>

                    <div class="card-body" style="background-color: #F5F5DC;">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal Pembelian</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Nama Kasir</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($transaksi as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->tanggal_pembelian }}</td>
                                        <td>{{ $data->barang->nama_barang }}</td>
                                        <td>{{ $data->kasir->nama_kasir }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->total }}</td>
                                        <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('transaksi.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('transaksi.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
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
