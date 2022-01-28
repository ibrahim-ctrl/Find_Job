@extends('partial.partial')

    @section('content')

    
  
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pendidikan Akhir</th>
                    <th scope="col">Sosmed</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datapendataan)
    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datapendataan->nama }}</td>
                    <td>{{ $datapendataan->no_hp }}</td>
                    <td>{{ $datapendataan->umur }}</td>
                    <td>{{ $datapendataan->email }}</td>
                    <td>{{ $datapendataan->jenis_kelamin }}</td>
                    <td>{{ $datapendataan->tanggal_lahir }}</td>
                    <td>{{ $datapendataan->alamat }}</td>
                    <td>{{ $datapendataan->pend_akhir }}</td>
                    <td>{{ $datapendataan->sosmed }}</td>
                    <td><a href="{{ url('/editadmin/'.$datapendataan->id) }}"><i class="fas fa-edit text-white bg-success p-2 rounded"></i></a></td>
                    <td><a href="{{ url('/destroyadmin/'.$datapendataan->id) }}"><i class="fas fa-trash-alt text-white bg-danger p-2 rounded"></i></a></td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        
    
        
    @endsection