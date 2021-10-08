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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div class="header__logo">
            <a href="/">
                <img src="{{ asset('images/logo-association-intermediaire.svg') }}" alt="Logo association intermédiaire de Verberie">
            </a>
        </div>
        <div class="header__menu">
            @include('layouts.navigation')
        </div>
        <div class="overlay">
            <div class="wrap">
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('particular') }}">Particuliers</a></li>
                    <li><a href="/pro">Professionnels</a></li>
                    <li><a href="/demandeurs">Demandeurs</a></li>
                    <li><a href="/demandeurs">Offres d'emploi</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
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
                    <img src="{{ asset('images/logo-association-intermediaire.svg') }}" alt="Logo association intermédiaire de Verberie">
                    <p>
                        3, Square des Merlets - 60410 VERBERIE <br>
                        Tel : 03 44 40 96 39 ou 03 44 40 86 34 <br>
                        aiverberie@gmail.com <br>
                        Ouvert du lundi au vendredi <br>
                        de 8h30 à 12h00 et de 13h00 à 17h00 <br>
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
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>