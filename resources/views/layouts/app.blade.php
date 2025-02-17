<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$title}}</title>
    </head>
    <body>
        <header>

        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <ul>
                <li>
                    <a href="http://127.0.0.1:8000/home">Accueil</a>
                </li>
            </ul>
        </footer>
    </body>
</html>