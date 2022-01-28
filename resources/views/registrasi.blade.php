
@extends('Layouts.default')

@section('content')
<body>

    <!-- header section starts      -->

    <header>

        <a href="#" class="logo"><img src="img2/icon/fj.png"></a>

        <nav class="navbar">
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="" id="search-icon"></i>
            <a href="{{ url('login') }}"><i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Logout"></i></a>
            
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="swiper-container home-slider">



            <div class="swiper-slide slide">
                <div class="content">
                    <span>Find Job</span>
                    <h3>Need Job?</h3>
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
        <h3 class="sub-heading"> Registrasi </h3>
        <h1 class="heading" style="font-size: 20px;"> Buat Akun Anda! </h1>
        <div class="row">
            <div class="col-12">
                @if (session()->has('berhasil'))           
                    <div class="alert alert-success" role="alert">
                        <center>{{ session('berhasil') }}</center>
                    </div>
                @endif
            </div>
        </div>
        <form action="{{ url('/registrasi') }}" method="POST">
            @csrf
            <div class="inputBox">
                <div class="input">
                    <span>Nama</span>
                    <input type="text"  name="name">
                </div>
                <div class="input">
                    <span>Email</span>
                    <input type="text"  name="email">
                </div>
                <div class="input">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
            </div>
            <input type="submit" value="Simpan" class="btn">
            </form>

    </section>
@endsection