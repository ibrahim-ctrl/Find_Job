@extends('Layouts.default')
    <!-- header section starts      -->

    @section('content')
        
    <header>

        <a href="#" class="logo"><img src="img2/icon/fj.png"></a>

        <nav class="navbar">
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class=""></a>
            <a href="#" class=""></a>
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
                    <p>Cek Dibawah!</p>
                    <a href="index.php" class="btn">Learn More</a>
                </div>
                <div class="image">
                    <img src="img2/icon/search.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

        </div>

    </section>

    <section><h6>Data Pendaftaran</h6></section>
    <section>
    <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-edit mr-2"></i>Tambah Data User</h3>
            <hr>          
                        <div class="card-content">
                            <form action="update.php" method="post" class="form form-horizontal">
                                <div class="form-body mb-1 p-1">
                                    <div class="row">
                                    <input type="hidden" name="txtid" value="<?= $data1['id']?>">
                                    <input type="hidden" name="txtlogin" value="<?= $data1['id_login']?>">
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                   <p>{{ $data->nama }}</p>
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
                                                    <p>{{ $data->no_hp }}</p>
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
                                                    <p>{{ $data->umur }}</p>
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
                                                    <p>{{ $data->email }}</p>
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
                                                    <p>{{ $data->jenis_kelamin }}</p>
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
                                                    <p>{{ $data->tanggal_lahir }}</p>
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
                                                    <p>{{ $data->alamat }}</p>
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
                                                    <p>{{ $data->pend_akhir }}</p>
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
                                                    <p>{{ $data->sosmed }}</p>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                        <a href="FPendataan.php" class="btn btn-primary mb-4"><i class="fas fa-backward mr-2"></i>Kembali</a> 

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        </div>
    </section>

    @endsection