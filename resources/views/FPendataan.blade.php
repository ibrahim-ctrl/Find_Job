@extends('Layouts.default')

@section('content')

<header>

    <a href="#" class="logo"><img src="img2/icon/fj.png"></a>

    <nav class="navbar">
        <a href="{{ url('/') }}">Beranda</a>
        <a href="#order">Pendaftaran</a>
        
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="" id="search-icon"></i>
        <a href="#" class=""></a>
        <a href="#" class=""></a>
    </div>

</header>


<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<section class="home" id="home">

    <div class="swiper-container home-slider">



        <div class="swiper-slide slide">
            <div class="content">
                <span>Find Job</span>
                <h3>Need Job?</h3>
                <p>Cek Dibawah!</p>
                <a href="index.php" class="btn">Learn More</a>
            </div>
            <div class="image">
                <img src="img2/icon/search.png" alt="">
            </div>
        </div>

    </div>

    <div class="swiper-pagination">



    </div>

</section>


<section class="order" id="order">
    <h3 class="sub-heading"> Data diri </h3>
    <h1 class="heading" style="font-size: 20px;"> Isi data diri anda dibawah! </h1>
    
    <div class="row">
        <div class="col-12">
            @if (session()->has('success'))           
                <div class="alert alert-success" role="alert">
                    <center>{{ session('success') }}</center>
                </div>
            @endif
        </div>
    </div>
    <form action="{{ url('/store') }}" method="POST">
        @csrf
        <div class="inputBox">
            <div class="input">
                <span>Nama</span>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" placeholder="Isikan Nama Anda" name="nama" required value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>Nomor HP</span>
                <input class="form-control @error('no_hp') is-invalid @enderror" type="number" placeholder="Isikan Nomor Ponsel Anda" name="no_hp" required value="{{ old('no_hp') }}">
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>umur</span>
                <input class="form-control @error('umur') is-invalid @enderror" type="text" placeholder="Isikan umur anda" name="umur" required value="{{ old('umur') }}">
                @error('umur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>Email</span>
                <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Isikan email anda" name="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Jenis Kelamin</span>
                <input class="form-control @error('jenis_kelamin') is-invalid @enderror" type="text" placeholder="Jenis kelamin anda ?" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>Tanggal lahir</span>
                <input class="form-control @error('tangga_lahir') is-invalid @enderror" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Alamat</span>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" placeholder="Isikan alamat anda" name="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>Pendidikan Akhir</span>
                <input class="form-control @error('pend_akhir') is-invalid @enderror" type="text" placeholder="pendidikan terkahir anda" name="pend_akhir" value="{{ old('pend_akhir') }}">
                @error('pend_akhir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Akun Sosmed</span>
                <input class="form-control @error('sosmed') is-invalid @enderror" type="text" placeholder="Isikan akun sosmed anda" name="sosmed" value="{{ old('sosmed') }}">
                @error('sosmed')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <input type="submit"  value="Simpan" class="btn">
    </form>

    <h3 class="sub-heading"> Upload Dokumen </h3>
    <h1 class="heading" style="font-size: 20px;"> Masukkan dokumen-dokumen anda dibawah! </h1>
    <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="inputBox">
            <div class="input">
                <span>KTP</span>
                {{-- <img class="img-preview img-fluid"> --}}
                <input class="form-control @error('gambar1') is-invalid @enderror" type="file" placeholder="Masukkan foto KTP" id="image" name="gambar1" >{{--onchange="previewImage()--}}
                @error('gambar1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input">
                <span>Foto</span>
                <input class="form-control @error('gambar2') is-invalid @enderror" type="file" placeholder="Pas foto 3x4" name="gambar2">
                @error('gambar2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>Kartu Keluarga</span>
                <input class="form-control @error('gambar3') is-invalid @enderror" type="file" placeholder="Masukkan foto KK" name="gambar3">
                @error('gambar3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input">
                <span>ijazah</span>
                <input class="form-control @error('gambar4') is-invalid @enderror" type="file" placeholder="Masukkan foto ijazah" name="gambar4">
                @error('gambar4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="submit" value="Kirim" class="btn">

    </form>
</section>
    
@endsection