<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Lato:wght@100&family=Montserrat:wght@200;400;700&family=Roboto:wght@100&family=Sofia&display=swap" rel="stylesheet">

</head>

<body style="background-image: url('img2/blue.jpg');">

    <div class="overlay"></div>
    <form action="{{ url('/adlogin') }}" method="post" class="box">
        @csrf
        <div class="header" style="background-image: url('img2/bg.jpg');">
            <h2>Login</h2>
        </div>
        <div class="login-area">
        <a href="{{ url('/') }}"><i style="font-size: 30px; float:left; margin-bottom:30px;" class="fas fa-arrow-alt-circle-left text-success"></i></a>
            <input type="text" placeholder="Username" name="username"  class="username">
            <input type="password" placeholder="Password" name="password"  class="password">
            <input type="submit" value="Login" class="submit">
        </div>
    </form>

</body>

</html>