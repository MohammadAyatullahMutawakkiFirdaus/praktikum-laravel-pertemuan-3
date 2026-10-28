<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <h2>sistem informasi surat</h2>
            <nav>
                <a href="{{ route ('dashboar')}}">Dashboard</a>
                <a href="{{ route('surat-masuk.index')}}">surat masuk</a>
                <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a>
            </nav>
        </header>

        <main>
        @yield('content')
        </main>

            <footer>
                <p> surat informasi surat</p>
            </footer>

        </body>
    </html>