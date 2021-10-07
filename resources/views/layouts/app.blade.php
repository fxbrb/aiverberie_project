<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <div class="header__logo">
        <a href="/">
            <img src="{{ asset('images/logo-association-intermediaire.svg') }}"
                 alt="Logo association intermédiaire de Verberie">
        </a>
    </div>
    <div class="header__menu">
        @include('layouts.navigation')
    </div>
</header>
<main>
    @yield('content')
</main>

<footer>

    <div class="footer__main">
        <div class="container__base">
            <div class="main__menu">
                <h2>Plan du site</h2>
                @include('layouts.navigation')
            </div>
            <div class="main__partners">
                <h2>Partenaires</h2>
                <div class="partners__list">
                    <img src="https://via.placeholder.com/90x90" alt="">
                    <img src="https://via.placeholder.com/90x90" alt="">
                    <img src="https://via.placeholder.com/90x90" alt="">
                    <img src="https://via.placeholder.com/90x90" alt="">
                    <img src="https://via.placeholder.com/90x90" alt="">
                    <img src="https://via.placeholder.com/90x90" alt="">
                </div>
            </div>
            <div class="main__infos">
                <img src="{{ asset('images/logo-association-intermediaire.jpg') }}"
                     alt="Logo association intermédiaire de Verberie">
                <p>
                    3 rue de l'Anthémis - 60200 COMPIEGNE <br>
                    Tél. : 03 44 86 42 82 <br>
                    accueil@partagetravail60.fr <br>
                    Lundi, mardi, mercredi et vendredi <br>
                    de 9h - 12h30 I 14h - 17h <br>
                    Jeudi de 14h à 17h <br>
                </p>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container__base">
            <a href="/mentions-légales">Mentions légales</a>
            <a href="https://webilo.fr">Réalisation Webilo {{ now()->year }}</a>
        </div>
    </div>
</footer>

@yield('js')
</body>
</html>
