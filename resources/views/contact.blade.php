@extends('layouts.app')

@section('content')


<div class="contact">
    <div id="mapid"></div>

    @if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="container__base">
        <div class="content__contact">
            <!-- LEFT SIDE -->
            <div class="left-side">
                <!-- ADRESSE -->
                <div class="details" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="300">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="details-title">Address</div>
                    <p>3, square des merlets 60410 VERBERIE</p>
                </div>
                <!-- TELEPHONE -->
                <div class="details" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="400">
                    <i class="fas fa-phone-alt"></i>
                    <div class="details-title">Téléphone</div>
                    <p>03 44 40 86 34</p>
                </div>
                <!-- EMAIL -->
                <div class="details" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="500">
                    <i class="fas fa-envelope"></i>
                    <div class="details-title">Email</div>
                    <p>contact@aiverberie.fr</p>
                </div>
                <!-- HORAIRE -->
                <div class="details" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="600">
                    <i class="fas fa-clock"></i>
                    <div class="details-title">Ouverture</div>
                    <p>Ouvert du lundi au vendredi
                        de 9 à 12h00 et de 14h00 à 17h00</p>
                </div>
            </div>
            <!-- RIGHT SIDE -->
            <div class="right-side">
                <form method="POST" action="{{ route('contact.send') }}"  data-aos-duration="800" data-aos="fade-down" data-aos-delay="300">
                    <h2 data-aos="fade-down" data-aos-duration="800" data-aos-delay="400"><span>Contactez nous</span></h2>
                    <p>Pour toute éventuelle question veuillez nous contacter</p>
                    @csrf
                    <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">
                        <input type="text" name="name" id="name" placeholder="Nom et Prénom">
                    </div>
                    @error('name')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="600">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700">
                        <input type="text" name="phone" id="phone" placeholder="Téléphone">
                    </div>
                    @error('phone')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="800">
                        <input type="text" name="object" id="object" placeholder="Objet">
                    </div>
                    @error('object')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="input-box message-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="900">
                        <textarea name="message" id="message" placeholder="Ecrivez votre message..."></textarea>
                    </div>
                    @error('message')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="input-validation" data-aos="fade-down" data-aos-duration="800" data-aos-delay="1000">
                        <input type="checkbox" name="validation_form" id="validation_form">
                        <label for="validation_form">En cochant cette case, vous acceptez que les informations
                            saisies dans ce formulaire soient utilisées dans le cadre de la demande
                            de contact et de la relation commerciale qui peut en découler
                        </label>
                    </div>
                    @error('validation_form')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="button" data-aos="fade-down" data-aos-duration="800" data-aos-delay="1100">
                        <input type="submit" class="submit-btn" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection