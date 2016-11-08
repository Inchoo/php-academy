<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>PHP Akademija</title>
    <!-- Required for Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Naslovnica</a></li>
                <li><a href="{{ url('/form') }}">Prijavi se na akademiju</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($isLoggedIn) && $isLoggedIn): ?>
                <li><a href="{{ url('/admin/logout') }}">Logout</a></li>
                <?php else: ?>
                <li><a href="{{ url('/admin') }}">Login (za admine)</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<!-- Main content from view -->
<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <p class="container">&copy; PHP Akademija, 2016</p>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>