@extends('partial.partial')

    @section('content')
        
        <a href="{{ url('Fadmin') }}" class="btn btn-primary mb-4"><i class="fas fa-backward mr-2"></i>Kembali</a>           
                    <div class="card-content">
                        <form action="{{ url('/update/'.$data->id) }}" method="post" class="form form-horizontal">
                            @csrf
                            <div class="form-body mb-1 p-1">
                                <div class="row">
                                <input type="hidden" name="txtid" value="{{ $data->id }}">
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required type="text" name="nama" value="{{ $data->nama }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>No HP</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="no_hp" value="{{ $data->no_hp }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Umur</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="umur" value="{{ $data->umur }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="email" value="{{ $data->email }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required name="kelamin" value="{{ $data->jenis_kelamin }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required type="text" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required type="text" name="alamat" value="{{ $data->alamat }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Akhir</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required type="text" name="pend_akhir" value="{{ $data->pend_akhir }}" type="text" class="form-control" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Akun Sosmed</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input required type="text" name="sosmed" value="{{ $data->sosmed }}" type="text" class="form-control" id="first-name-icon">
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