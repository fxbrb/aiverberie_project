@extends('layouts.app')

@section('content')

<div class="about">
    <div class="slide">
        <img src="https://via.placeholder.com/1920x500" alt="" style="width: 100%;">
    </div>

    <div class="container__base">
        <section class="historical">
            <div class="left__historical">
                <h2>historique</h2>
            </div>
            <div class="right__historical">
                <p>L’association Intermédiaire de Verberie est née en 1987 et est une association Loi 1901 sans but lucratif conventionnée par l’Etat ayant pour objectif la remise au travail des personnes rencontrant des difficultés à titre onéreux, par le biais de missions auprès des différents utilisateurs.</p>
            </div>
        </section>

        <section class="structure">
            <h2>structure</h2>
            <p>L'Association Intermédiaire est dirigée par un conseil d’administration élu lors de l’assemblée générale.</p>
            <div class="structure__btn">
                <button id="directors">conseil d'administration</button>
                <button id="permanents">equipe des permanents</button>
            </div>
            @include('layouts.directors')
            @include('layouts.permanents')
        </section>

        <section class="mission">
            <div class="left__mission">
                <img src="https://via.placeholder.com/500x300" alt="">
            </div>
            <div class="right__mission">
                <h2>Le retour à l’emploi durable</h2>
                <p>L’Association Intermédiaire a pour but l’insertion socioprofessionnelle</p>
                <p>Plus de 24 000 heures de travail sont distribuées à 100 personnes chaque année.</p>
            </div>
        </section>


        <section class="territory">
            <h2>Nos territoires d'interventions</h2>
            <div class="territory__container">
                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/longueil.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>longueil sainte marie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/chevriere.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>chevrières</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/houdancourt.jpeg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>houdancourt</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/rivecourt.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>rivecourt</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/rhuis.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>rhuis</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/stvaast.jpeg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>st vaast de longmont</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/saintines.jpeg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>saintines</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/stpierre.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>bethisy st pierre</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/stmartin.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>bethisy st martin</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/roberval.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>roberval</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/vsv.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>villeneuve-sur-verberie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/raray.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>raray</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/nery.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>nery</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/brasseuse.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>brasseuse</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/rully.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>rully</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/barberie.jpeg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>barberie</h3>
                    </div>
                </div>

                <div class="territory__box">
                    <div class="territory__img">
                        <img src="{{ asset('images/villes/verberie.jpg') }}" alt="">
                    </div>
                    <div class="territory__content">
                        <h3>verberie</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>




@endsection