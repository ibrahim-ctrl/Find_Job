

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="aset/css/bootstrap.css">
    <link rel="stylesheet" href="aset/fontawsome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Lato:wght@100&family=Montserrat:wght@200;400;700&family=Roboto:wght@100&family=Sofia&display=swap" rel="stylesheet">

</head>

<body style="background-image: url('img2/blue.jpg');">

    <div class="overlay"></div>
    <form action="{{ url('/userlogin') }}" method="post" class="box">
        @csrf
        <div class="header" style="background-image: url('img2/bg.jpg');">
            <h2>Login</h2>
            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
        </div>
        <div class="login-area">
        <a href="{{ url('/') }}"><i style="font-size: 30px; float:left; margin-bottom:30px;" class="fas fa-arrow-alt-circle-left text-success"></i></a>
            <input type="text" placeholder="Email" name="email"  class="username">
            <input type="password" placeholder="Password" name="password"  class="password">
            <input type="submit" name="login" value="Login" class="submit">
            <a style="text-align: center" href="{{ url('/registrasi') }}">Belum Punya Akun ?</a>
        </div>
    </form>

</body>

</html>