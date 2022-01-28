@extends('partial.partial')

    @section('content')
        
        <a href="{{ url('/lowongan') }}" class="btn btn-primary mb-4"><i class="fas fa-backward mr-2"></i>Kembali</a>           
                    <div class="card-content">
                        <form action="{{ url('/updatelowongan/'.$lowongan->id) }}" method="post" class="form form-horizontal">
                            @csrf
                            <div class="form-body mb-1 p-1">
                                <div class="row">
                                <input type="hidden" name="txtid" value="{{ $lowongan->id }}">
                                    <div class="col-md-4">
                                        <label>Gambar</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="file" name="gambar"  class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Judul</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="judul" value="{{ $lowongan->judul }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Isi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="isi" value="{{ $lowongan->isi }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
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