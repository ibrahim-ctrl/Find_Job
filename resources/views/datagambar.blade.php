@extends('partial.partial')

@section('content')


    @if (session()->has('Berhasil'))           
                <div class="alert alert-success" role="alert">
                    <center>{{ session('Berhasil') }}</center>
                </div>
            @endif
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">KTP</th>
                <th scope="col">Foto</th>
                <th scope="col">Kartu Keluarga</th>
                <th scope="col">Ijazah</th>
                <th colspan="3" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewgambar as $view)
            <tr>
                <td><img style="width: 65%;" src="{{ asset('storage/' . $view->gambar1) }}" class="img-fluid"></td>
                <td><img style="width: 65%;" src="{{ asset('storage/' . $view->gambar2) }}" class="img-fluid"></td>
                <td><img style="width: 65%;" src="{{ asset('storage/' . $view->gambar3) }}" class="img-fluid"></td>
                <td><img style="width: 65%;" src="{{ asset('storage/' . $view->gambar4) }}" class="img-fluid"></td>
                <td><a href="{{ url('/editgambar/'.$view->id) }}"><i class="fas fa-edit text-white bg-success p-2 rounded"></i></a></td>
                <td><a href="{{ url('/hapusgambar/'.$view->id) }}"><i class="fas fa-trash-alt text-white bg-danger p-2 rounded"></i></a></td>
            </tr>
            @endforeach
                
            
        </tbody>
    </table>


    
@endsection