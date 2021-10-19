<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Association Intermédiaire de Verberie</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/basic.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div class="header__logo">
            <a href="/">
                <img data-aos="fade-down" data-aos-delay="100" src="{{ asset('images/logo-association-intermediaire.svg') }}" alt="Logo association intermédiaire de Verberie">
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
                    <li><a href="{{ route('professional') }}">Professionnels</a></li>
                    <li><a href="{{ route('collectivity') }}">Collectivité</a></li>
                    <li><a href="{{ route('job') }}">Offres d'emploi</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
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
                        de 9 à 12h00 et de 14h00 à 17h00 <br>
                    </p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container__base">
                <a href="{{ route('legalnotice') }}">Mentions légales</a>
                <a href="https://webilo.fr">Réalisation Webilo {{ now()->year }}</a>
            </div>
        </div>
    </footer>

    @yield('js')
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>

    <script>
        AOS.init({
            duration: 800,
        });
    </script>

    @stack('scripts')
</body>

</html>