@extends('layouts.app')

@section('content')


<div class="professionals">
    <div class="slide">
        <img src="https://via.placeholder.com/1920x500" alt="" style="width: 100%;">
    </div>

    @if(\Session::has('success'))
    <div class="success__alert">{{\Session::get('success')}}</div>
    {{\Session::forget('success')}}
    @endif

    @if(\Session::has('error'))
    <div class="error__alert">{{\Session::get('error')}}</div>
    {{\Session::forget('errors')}}
    @endif

    <div class="container__base">
        <section class="services">
            <h2>L’association intermédiaire vous propose une solution et sans engagement</h2>
            <p>Les services sont les suivant :</p>
            <div class="services__card">
                @foreach(\App\Models\Services::where('service_types_id', '2')->get() as $service)
                <div class="single__service">
                    <div class="services__header" style="background-image: url('{{ asset('storage/' . $service->image) }}');
            background-size: cover; background-position: center; background-repeat: no-repeat;" title="Image {{$service->name}}">
                        <h2>{{$service->name}}</h2>
                    </div>
                    <div class="services__text">
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <section class="avantages__pro">
        <h2 data-aos-duration="800" data-aos="fade-right" data-aos-delay="300">vos avantages</h2>

        <div class="avantages__container">
            <div class="avantages__box" data-aos-duration="800" data-aos="fade-down" data-aos-delay="400">
                <div class="avantages__top">
                    <h3>les économies</h3>
                    <i class="fas fa-coins"></i>
                </div>
                <div class="avantages__bottom">
                    <p>Pas de frais de dossier. Crédit ou réduction d'impot de 50% sur le service à la personne.</p>
                </div>
            </div>

            <div class="avantages__box" data-aos-duration="800" data-aos="fade-down" data-aos-delay="500">
                <div class="avantages__top">
                    <h3>la réactivité</h3>
                    <i class="fas fa-hourglass"></i>
                </div>
                <div class="avantages__bottom">
                    <p>Réponse ou prise de contact sous 48 heures.</p>
                </div>
            </div>

            <div class="avantages__box" data-aos-duration="800" data-aos="fade-down" data-aos-delay="600">
                <div class="avantages__top">
                    <h3>la proximité</h3>
                    <i class="far fa-compass"></i>
                </div>
                <div class="avantages__bottom">
                    <p>Faites travailler des personnes proches de chez vous.</p>
                </div>
            </div>

            <div class="avantages__box" data-aos-duration="800" data-aos="fade-down" data-aos-delay="700">
                <div class="avantages__top">
                    <h3>la souplesse</h3>
                    <i class="fas fa-street-view"></i>
                </div>
                <div class="avantages__bottom">
                    <p>Aucune contrainte de durée, ni de fréquence.</p>
                </div>
            </div>

            <div class="avantages__box" data-aos-duration="800" data-aos="fade-down" data-aos-delay="800">
                <div class="avantages__top">
                    <h3>la sécurité</h3>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="avantages__bottom">
                    <p>Nous sommes l’employeur, les intervenants sont sous notre responsabilité.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container__base">
    <section class="contact__professionals" id="contact__professionals" data-aos-duration="800" data-aos="fade-down" data-aos-delay="300">
        <form method="POST" action="{{ route('professional.send') }}" enctype="multipart/form-data">
            <h2 data-aos="fade-down" data-aos-duration="800" data-aos-delay="400"><span>Demande de services</span></h2>
            @csrf
            <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">
                <input type="text" name="name" id="name" placeholder="Nom et Prénom">
            </div>
            @error('name')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="600">
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            @error('email')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="input-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700">
                <input type="text" name="phone" id="phone" placeholder="Téléphone">
            </div>
            @error('phone')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="select-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="800">
                <select id="service" name="service[]" multiple>
                    <option disabled>Sélectionnez un service</option>
                    @foreach(\App\Models\Services::where('service_types_id', '2')->get() as $service)
                    <option value="{{ $service->name }}">
                        {{$service->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            @error('service')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="input-box message-box" data-aos="fade-down" data-aos-duration="800" data-aos-delay="900">
                <textarea name="message" id="message" placeholder="Ecrivez votre message..."></textarea>
            </div>
            @error('message')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="input-validation" data-aos="fade-down" data-aos-duration="800" data-aos-delay="1000">
                <input type="checkbox" name="validation_form" id="validation_form">
                <label for="validation_form">En cochant cette case, vous acceptez que les informations
                    saisies dans ce formulaire soient utilisées dans le cadre de la demande
                    de contact et de la relation commerciale qui peut en découler
                </label>
            </div>
            @error('validation_form')
            <div class="input__error">{{ $message }}</div>
            @enderror
            <div class="button" data-aos="fade-down" data-aos-duration="800" data-aos-delay="1100">
                <input type="submit" class="submit-btn" value="Envoyer">
            </div>
        </form>
    </section>
</div>
@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        $("#service").select2({
            placeholder: "Sélectionnez vos services",
            maximumSelectionLength: 4,
            allowClear: true,
        });

    });
</script>
@endpush


