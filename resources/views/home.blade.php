@extends('layouts.app')

@section('content')
<div class="home">
    <div class="slide">
        <img src="https://via.placeholder.com/1920x500" alt="" style="width: 100%;">
    </div>

    <div class="container__base">
        <section class="services">
            <h2>Nos services</h2>

            <div class="services__list">
                <div class="service individual">
                    <p>Services aux particuliers</p>
                </div>
                <div class="service pro">
                    <p>Services aux professionnels</p>
                </div>
                <div class="service community">
                    <p>Services aux collectivité</p>
                </div>
            </div>
        </section>

        <section class="about">
            <img src="https://via.placeholder.com/500x300" alt="">
            <div class="about__content">
                <h2>Qui sommes nous ?</h2>
                <p>L'association intermédiaire est une association Loi 1901 sans but lucratif. Elle est administrée par un conseil d'administration élu lors de l'assemblée générale.
                    L'association intermédiaire de Verberie est née en 1987.
                    Elle est conventionnée par l'Etat ayant pour objet l'embauche des personnes sans emploi rencontrant des difficultés sociales et professionnelles.
                </p>
            </div>
        </section>

        <section class="jobs">
            <h2>Nos dernières offres d'emploi</h2>
            <div class="jobs__list">
                @foreach(\App\Models\JobOffer::select('title', 'description', 'place', 'type_of_contract')->get() as $job)
                <div class="job">
                    <h3>{{$job->title}}</h3>
                    <p>{!! Str::words($job->description, 25, '...') !!}</p>
                    <div class="job__infos">
                        <div>
                            <span><i class="fas fa-map-marker-alt"></i> {{$job->place}}</span>
                            <span><i class="fas fa-file-contract"></i> {{$job->type_of_contract}}</span>
                        </div>
                        <a href="#">Postuler</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection