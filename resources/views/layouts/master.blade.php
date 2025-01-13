@include('sweetalert::alert')

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
<body class="@stack('body')">
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
            <li><a class="hover:text-white text-black" href="/register">
                    <svg class="hover:fill-current" height="24" viewBox="0 0 24 24" width="24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m12 8-1.33.09c-.86-1.02-3.27-3.59-5.67-3.59 0 0-1.97 2.96-.04 6.91-.55.83-.89 1.26-.96 2.25l-1.93.29.21.98 1.76-.26.14.71-1.57.94.47.89 1.45-.89c1.15 2.44 4.06 3.68 7.47 3.68s6.32-1.24 7.47-3.68l1.45.89.47-.89-1.57-.94.14-.71 1.76.26.21-.98-1.93-.29c-.07-.99-.41-1.42-.96-2.25 1.93-3.95-.04-6.91-.04-6.91-2.4 0-4.81 2.57-5.67 3.59zm-3 3a1 1 0 0 1 1 1 1 1 0 0 1 -1 1 1 1 0 0 1 -1-1 1 1 0 0 1 1-1m6 0a1 1 0 0 1 1 1 1 1 0 0 1 -1 1 1 1 0 0 1 -1-1 1 1 0 0 1 1-1m-4 3h2l-.7 1.39c.2.64.76 1.11 1.45 1.11a1.5 1.5 0 0 0 1.5-1.5h.5a2 2 0 0 1 -2 2c-.75 0-1.4-.41-1.75-1-.35.59-1 1-1.75 1a2 2 0 0 1 -2-2h.5a1.5 1.5 0 0 0 1.5 1.5c.69 0 1.25-.47 1.45-1.11z"/>
                    </svg>
                </a></li>
        </ul>

    </nav>
</header>
{{--  content  --}}

@yield("content")

{{--  footer  --}}

<footer class="bg-black text-white text-center @stack('footerStyle') p-4 w-full">
    <div class="m-0 flex flex-col items-center">
        <p>&copy; 2024 Jelle Fiere. All Rights Reserved.</p>
        <p><a href="https://github.com/pinglecan" target="_blank" class="github-link">GitHub</a></p>
    </div>
</footer>


{{--  js  --}}

@stack('js')
</body>
</html>
