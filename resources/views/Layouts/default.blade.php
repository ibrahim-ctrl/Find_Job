<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Job</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{ asset('aset/fontawsome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('aset/css/bootstrap.css') }}">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    @stack('before-content')
    @yield('content')
    @stack('after-content')

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>lokasi</h3>
            <a href="#"><img src="img2/icon/location.png" style="width: 10%;">Indonesia</a>
        </div>

        <div class="box">
        <h3>tautan langsung</h3>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Lowongan Kerja</a>
        <a href="#team">Tim</a>
        <a href="#footer">Kontak Kami</a>
        </div>

        <div class="box">
            <h3>info kontak</h3>
            <a href="#"><img style="width: 20px;" src="img2/icon/gmail.png">&emsp;&nbsp;FindJob@gmail.com</a>
            <a href="#"><img style="width: 30px;" src="img2/icon/location.png">&ensp;Yogyakarta, Indonesia - 400104</a>
            <a href="#"><img style="width: 27px;" src="img2/icon/whatsapp.png">&emsp;081234567897</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <div class="icon">
            <a href="#"><img src="img2/icon/facebook.png">  FindJob</a>
            <a href="#"><img src="img2/icon/twitter.png">  @FindJob</a>
            <a href="#"><img src="img2/icon/ig.png">  @Find_Job</a>
            </div>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span>FindJob</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="img2/gif/loading2.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('aset/js/bootstrap.bundle.min.js') }}"></script>

<!-- custom js file link  -->
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>