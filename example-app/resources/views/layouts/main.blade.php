<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/styles/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <a href="/" class="navbar-brand" id="navbar">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events" />
                    </a>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Create Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    <footer>
        <p>HDC Event &copy; 2020</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>