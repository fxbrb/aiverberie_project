@extends('layouts.app')

@section('content')

<div class="about">
    <div class="slide">
        <img src="https://via.placeholder.com/1920x500" alt="Bannière a propos" style="width: 100%;">
    </div>

    <div class="container__base">
        <section class="historical">
            <div class="left__historical">
                <h2 data-aos="fade-up" data-aos-delay="300">historique</h2>
            </div>
            <div class="right__historical">
                <p data-aos="fade-up" data-aos-delay="400">L’association Intermédiaire de Verberie est née en 1987 et est une association Loi 1901 sans but lucratif conventionnée par l’Etat ayant pour objectif la remise au travail des personnes rencontrant des difficultés à titre onéreux, par le biais de missions auprès des différents utilisateurs.</p>
            </div>
        </section>

        <section class="structure">
            <h2 data-aos="fade-down" data-aos-delay="300">structure</h2>
            <p data-aos="fade-down" data-aos-delay="400">L'Association Intermédiaire est dirigée par un conseil d’administration élu lors de l’assemblée générale.</p>
            <div class="structure__btn">
                <button id="directors" data-aos="zoom-in">conseil d'administration</button>
                <button id="permanents" data-aos="zoom-in">equipe des permanents</button>
            </div>
            @include('layouts.directors')
            @include('layouts.permanents')
        </section>

        <section class="mission">
            <div class="left__mission img" data-aos-delay="300" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" title="Retour à l’emploi image">
                <!-- <img src="{{ asset('./images/clock.jpeg') }}" alt=""> -->
            </div>
            <div class="right__mission" data-aos-delay="500" data-aos="zoom-out-up">
                <h2>Le retour à l’emploi durable</h2>
                <p>L’Association Intermédiaire a pour but l’insertion socioprofessionnelle</p>
                <p>Plus de 24 000 heures de travail sont distribuées à 100 personnes chaque année.</p>
            </div>
        </section>


        <section class="territory">
            <h2 data-aos="fade-up" data-aos-delay="300">Nos territoires d'interventions</h2>
            <div class="territory__container">
                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('images/villes/longueil.jpg') }}" alt="Image ville Longueil sainte marie">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="450">
                        <h3>longueil sainte marie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('images/villes/chevriere.jpg') }}" alt="Image ville Chevrière">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="550">
                        <h3>chevrières</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="600">
                        <img src="{{ asset('images/villes/houdancourt.jpeg') }}" alt="Image ville Houdancourt">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="650">
                        <h3>houdancourt</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="700">
                        <img src="{{ asset('images/villes/rivecourt.jpg') }}" alt="Image ville Rivecourt">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="750">
                        <h3>rivecourt</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="800">
                        <img src="{{ asset('images/villes/rhuis.jpg') }}" alt="Image ville Rhuis">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="850">
                        <h3>rhuis</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="900">
                        <img src="{{ asset('images/villes/stvaast.jpeg') }}" alt="Image ville St vaast de longmont">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="950">
                        <h3>st vaast de longmont</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1000">
                        <img src="{{ asset('images/villes/saintines.jpeg') }}" alt="Image ville Saintines">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1050">
                        <h3>saintines</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1100">
                        <img src="{{ asset('images/villes/stpierre.jpg') }}" alt="Image ville Bethisy st pierre">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1150">
                        <h3>bethisy st pierre</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1200">
                        <img src="{{ asset('images/villes/stmartin.jpg') }}" alt="Image ville Bethisy st martin">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1250">
                        <h3>bethisy st martin</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img"data-aos="zoom-in" data-aos-delay="1300">
                        <img src="{{ asset('images/villes/roberval.jpg') }}" alt="Image ville Roberval">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1350">
                        <h3>roberval</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1400">
                        <img src="{{ asset('images/villes/vsv.jpg') }}" alt="Image ville Villeneuve-sur-verberie">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1450">
                        <h3>villeneuve-sur-verberie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1500">
                        <img src="{{ asset('images/villes/raray.jpg') }}" alt="Image ville Raray">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1550">
                        <h3>raray</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1600">
                        <img src="{{ asset('images/villes/nery.jpg') }}" alt="Image ville Nery">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1650">
                        <h3>nery</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1700">
                        <img src="{{ asset('images/villes/brasseuse.jpg') }}" alt="Image ville Brasseuse">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1750">
                        <h3>brasseuse</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1800">
                        <img src="{{ asset('images/villes/rully.jpg') }}" alt="Image ville Rully">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1850">
                        <h3>rully</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="1900">
                        <img src="{{ asset('images/villes/barberie.jpeg') }}" alt="Image ville Barberie">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="1950">
                        <h3>barberie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img" data-aos="zoom-in" data-aos-delay="2000">
                        <img src="{{ asset('images/villes/verberie.jpg') }}" alt="Image ville Verberie">
                    </div>
                    <div class="territory__content" data-aos="zoom-in" data-aos-delay="2050">
                        <h3>verberie</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>




@endsection