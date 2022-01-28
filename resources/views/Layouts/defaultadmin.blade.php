<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="aset/fontawsome/css/all.min.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <a class="navbar-brand" href="#"><i class="fas fa-user mr-2"></i>Selamat Datang {{ auth()->user()->name }}</a>

        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
            <h5>
                {{-- <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i> --}}
                <i>
            <form action="{{ url('/logout') }}" method="post">
                @csrf
            <button type="submit" class="nav-link px-3 bg-danger border-0">
                Logout  <i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Logout"></i>
            </button>
            </form>
        </i>
            </h5>
        </div>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ url('/Fadmin') }}"><i class="fas fa-user mr-2"></i>Data User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/datagambar') }}"><i class="fas fa-user mr-2"></i>Data Gambar User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/lowongan') }}"></a>
                    {{-- <hr class="bg-secondary"> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/tim') }}"></a>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
                <li class="nav-item"><a class="nav-link text-white" href=""></a></li>
            </ul>
        </div>

        @stack('before-content')
        @yield('content')
        @stack('after-content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    {{-- <script>
    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    conts oFReader = new FileReader();
    oFReader.readAsDataURL(gambar1.files[0]);

    oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
    }
}
</script> --}}
    </body>
    
    </html>