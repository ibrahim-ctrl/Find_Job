@extends('partial.partial')

@section('content')
    <a href="{{ url('/datagambar') }}" class="btn btn-primary mb-4"><i class="fas fa-backward mr-2"></i>Kembali</a>
<div class="card-content">
<form action="{{ url('/updateimage/' . $gambarmodel->id) }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
    @csrf
<div class="form-body mb-1 p-1">
    <div class="row">
        {{-- <input type="hidden" name="id" value="{{ $gambarmodel->id }}"> --}}
        <div class="col-md-4">
            <label>KTP</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="hidden" name="oldImage" value="{{ $result->gambar1 }}"> --}}
                    <img src="{{ asset('storage/' . $gambarmodel->gambar1) }}" style="width: 150px ; margin-bottom:10px;">
                    <input  type="file" name="ktp" value=""  class="form-control" id="first-name-icon">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label>Pas Foto</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="hidden" name="oldImage" value="{{ $gambarmodel->gambar2 }}"> --}}
                    <img src="{{ asset('storage/' . $gambarmodel->gambar2) }}" style="width: 150px ; margin-bottom:10px;">
                    <input  type="file" name="foto" value="" class="form-control" id="first-name-icon">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label>Kartu Keluarga</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="hidden" name="oldImage" value="{{ $gambarmodel->gambar3 }}"> --}}
                    <img src="{{ asset('storage/' . $gambarmodel->gambar3) }}" style="width: 150px ; margin-bottom:10px;">
                    <input  type="file" name="kk" value="" class="form-control" id="first-name-icon">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label>Ijazah</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="hidden" name="oldImage" value="{{ $gambarmodel->gambar4 }}"> --}}
                    <img src="{{ asset('storage/' . $gambarmodel->gambar4) }}" style="width: 150px ; margin-bottom:10px;">
                    <input  type="file" name="ijazah" value="" class="form-control" id="first-name-icon">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-end">
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>

        </div>
    </div>
</div>

</form>
@endsection