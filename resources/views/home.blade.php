@extends('layouts.app')

@section('content')
<div class="home">
    <div class="slide" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
        <img src="https://via.placeholder.com/1920x500" alt="" style="width: 100%;">
    </div>

    <div class="container__base">
        <section class="services">
            <h2 data-aos-duration="800" data-aos="fade-right" data-aos-delay="300">Nos services</h2>

            <div class="services__list">
                <a data-aos="fade-left" data-aos-duration="700" data-aos-delay="500" href="{{ route('particular') }}" class="service individual">
                    <p>Particuliers</p>
                </a>
                <a data-aos="flip-up" data-aos-duration="700" data-aos-delay="300" href="{{ route('professional') }}" class="service pro">
                    <p>Professionnels</p>
                </a>
                <a data-aos="fade-right" data-aos-duration="700" data-aos-delay="500" href="{{ route('collectivity') }}" class="service community">
                    <p>Collectivités</p>
                </a>
            </div>
        </section>

        <section class="about">
            <div class="about__img img" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="300"></div>
            <!-- <img data-aos="zoom-in" data-aos-duration="500" data-aos-delay="300" src="{{ asset('./images/team.jpeg') }}" alt=""> -->
            <div class="about__content" data-aos="zoom-out" data-aos-duration="500" data-aos-delay="300">
                <h2>Qui sommes nous ?</h2>
                <p>L'association intermédiaire est une association Loi 1901 sans but lucratif. Elle est administrée par un conseil d'administration élu lors de l'assemblée générale.
                    L'association intermédiaire de Verberie est née en 1987.
                    Elle est conventionnée par l'Etat ayant pour objet l'embauche des personnes sans emploi rencontrant des difficultés sociales et professionnelles.
                </p>
                <a href="{{ route('about') }}">En savoir plus</a>
            </div>
        </section>

        <section class="jobs">
            <h2 data-aos="fade-right" data-aos-duration="800">Nos dernières offres d'emploi</h2>
            <div class="jobs__list" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                @foreach(\App\Models\JobOffer::select('title', 'description', 'place', 'type_of_contract')->take(4)->get() as $job)
                <div class="job">
                    <h3>{{$job->title}}</h3>
                    <p>{!! Str::words($job->description, 25, '...') !!}</p>
                    <div class="job__infos">
                        <div>
                            <span><i class="fas fa-map-marker-alt"></i> {{$job->place}}</span>
                            <span><i class="fas fa-file-contract"></i> {{$job->type_of_contract}}</span>
                        </div>
                        <a href="{{ route('job') }}">Postuler</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection