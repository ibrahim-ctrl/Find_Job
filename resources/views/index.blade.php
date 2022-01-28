
@extends('Layouts.default')

@section('content')

<header>

    <a href="#" class="logo"><img src="img2/icon/fj.png"></a>

    <nav class="navbar">
        <a class="active" href="#home">Beranda</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Lowongan Kerja</a>
        <a href="#team">Tim</a>
        <a href="#footer">Kontak Kami</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="{{ url('/login') }}"><i class="fas fa-user"></i></a>
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
                <a href="#about" class="btn">Learn More</a>
            </div>
            <div class="image">
                <img src="img2/icon/search.png" alt="">
            </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>

    </div>

</section>

<section class="about" id="about">
    <h1 class="sub-heading"> Tentang Kami </h1>
    <h3 class="heading"> Sedikit penjelasan tentang perusahaan kami </h3>

    <div class="row">

        <div class="image">
            <img src="img2/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>Find Job</h3>
            <p>adalah tempat untuk menyediakan informasi lowongan pekerjaan dan sekaligus
                dapat menjadi perantara pendaftaran pekerjaan tersebut.</p>

            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<section class="menu" id="menu">
    <h1 class="sub-heading"> Lowongan </h1>
    <h3 class="heading"> Beberapa perusahaan yang sedang buka lowongan </h3>
    
        
    
    <div class="box-container">
        @foreach ($datas as $data)
        <div class="box">
            <div class="image">
                <img  src="{{ asset('storage/' . $data->gambar) }}" alt="" srcset="">

            </div>
            <div class="content">

                <h3>{{ $data->judul }}</h3>
                <p>{{ $data->isi }}</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div>
        @endforeach
        {{-- <div class="box">
            <div class="image">
                <img src="img2/creative.jpg" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img2/puma.jpg" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img2/ninja.jpg" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img2/infinite.jpg" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img2/faster.jpg" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div> --}}

        {{-- <div class="box">
            <div class="image">
                <img src="img2/fcb.png" alt="">

            </div>
            <div class="content">

                <h3>Terbuka</h3>
                <p>Pendaftaran sedang dibuka.</p>
                <a href="{{ url('/FPendataan') }}" class="btn">Daftar</a>

            </div>
        </div> --}}
    </div>
    
</section>

<section class="team" id="team">
    <div class="layar-dalam">
        <h1 class="sub-heading"> Tim Kami </h1>
        <h3 class="heading"> anggota tim </h3>
        
            
       
        <div class="tim">
            @foreach ($datases as $item)
            <div>
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="" srcset="">
                <h6 style="margin-top: 87px;">{{ $item->nama }}</h6>
                <span>{{ $item->nim }}</span>
            </div>
            @endforeach
            {{-- <div>
                <img style="-webkit-transform: rotate(270deg);
                          -moz-transform: rotate(270deg);
                          -ms-transform: rotate(270deg);
                          -o-transform: rotate(270deg);
                         transform: rotate(270deg);
                         width:90%;" src="img2/zain.jpeg" />
                <h6 style="margin-top: 87px;">M.Zaini Ferdiansyah</h6>
                <span>19.11.3248</span>
            </div> --}}
            {{-- 
            <div>
                <img src="img2/bagas.jpeg" />
                <h6 style="margin-top: 87px;">Bagas Yudha Pratama</h6>
                <span>19.11.3295</span>
            </div>
            <div>
                <img style="width: 60%;" src="img2/ibra.jpg" />
                <h6>Rizky Ibrahim Silehu</h6>
                <span>19.11.3264</span>
            </div> --}}
        </div>
       
    </div>
</section>
    
@endsection