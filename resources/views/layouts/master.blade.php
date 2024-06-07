<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/css/app.css')
    @stack('styles')
    <title>Document</title>
</head>
<body @stack('body')>
{{--  naviegatie menu  --}}
<header class="header-container">
    <h1 class="logo">sillycats.net</h1>
    <nav>
        <ul class="nav-list">
            <li><a class="nav-link" href="/hello">welkom</a></li>
            <li><a class="nav-link" href="/playlist">playlist</a></li>
            <li><a class="nav-link" href="/songs">songs</a></li>
            <li><a class="nav-link" href="/genres">genres</a></li>
            <li><a class="nav-link" href="/Silly">silly</a></li>
        </ul>

    </nav>
</header>
{{--  content  --}}

@yield("content")

{{--  footer  --}}

<footer>
    <div class="m-0 flex flex-col items-center">
        <p>&copy; 2024 Jelle Fiere. All Rights Reserved.</p>
        <p><a href="https://github.com/pinglecan" target="_blank" class="github-link">GitHub</a></p>
    </div>
</footer>


{{--  js  --}}

@stack('js')
</body>
</html>
