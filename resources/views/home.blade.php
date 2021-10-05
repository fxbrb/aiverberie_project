@extends('layouts.app')

@section('content')
    <div class="home">
        <div class="slide">
            <img src="https://via.placeholder.com/1920x500" alt="">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tempor augue, vel consequat
                        massa. Donec mattis, purus quis finibus molestie, arcu erat condimentum lorem, hendrerit commodo
                        turpis mi fermentum est. Vivamus condimentum gravida ex, vitae pellentesque neque fermentum id.
                        Vestibulum nec quam id enim pulvinar imperdiet in ac est. <br>
                        Quisque consectetur scelerisque facilisis. Sed bibendum rhoncus orci accumsan tempus. Praesent
                        placerat mattis metus sed tempus.
                    </p>
                </div>
            </section>

            <section class="jobs">
                <h2>Nos dernières offres d'emploi</h2>

                <div class="jobs__list">
                    <div class="job">
                        <h3>Lorem ipsum dolor (H/F)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, augue et semper
                            malesuada, neque nibh accumsan sem, eu ultrices mi lacus a erat.</p>
                        <div class="job__infos">
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i> Compiègne</span>
                                <span><i class="fas fa-file-contract"></i> CDI</span>
                            </div>
                            <a href="#">Postuler</a>
                        </div>
                    </div>
                    <div class="job">
                        <h3>Lorem ipsum dolor (H/F)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, augue et semper
                            malesuada, neque nibh accumsan sem, eu ultrices mi lacus a erat.</p>
                        <div class="job__infos">
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i> Compiègne</span>
                                <span><i class="fas fa-file-contract"></i> CDI</span>
                            </div>
                            <a href="#">Postuler</a>
                        </div>
                    </div>
                    <div class="job">
                        <h3>Lorem ipsum dolor (H/F)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate, augue et semper
                            malesuada, neque nibh accumsan sem, eu ultrices mi lacus a erat.</p>
                        <div class="job__infos">
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i> Compiègne</span>
                                <span><i class="fas fa-file-contract"></i> CDI</span>
                            </div>
                            <a href="#">Postuler</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
