@extends('partial.partial')

    @section('content')

    
        <a href="{{ url('/inputlowongan') }}" class="btn btn-primary mb-4"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <table class="table table-striped table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datapendataan)
    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img style="width: 15%;" src="{{ asset('storage/' . $datapendataan->gambar) }}" alt="" srcset=""></td>
                    <td>{{ $datapendataan->judul }}</td>
                    <td>{{ $datapendataan->isi }}</td>
                    <td><a href="{{ url('/edit/'.$datapendataan->id) }}"><i class="fas fa-edit text-white bg-success p-2 rounded"></i></a></td>
                    <td><a href="{{ url('/destroy/'.$datapendataan->id) }}"><i class="fas fa-trash-alt text-white bg-danger p-2 rounded"></i></a></td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    
        
    @endsection