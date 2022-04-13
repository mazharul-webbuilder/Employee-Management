<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow">
    <div class="container">
        <a href="{{route('dashboard')}}" class="navbar-brand"><em>Spark Engineering</em></a>
        <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('dashboard')}}" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">Admin : {{Auth::user()->name}}</a></li>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="nav-link">Logout</a></li>
                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>

@yield('body')







<script src="{{asset('/')}}assets/front/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}assets/front/js/bootstrap.js"></script>
</body>
</html>
