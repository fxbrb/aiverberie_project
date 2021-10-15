@extends('layouts.app')

@section('content')

<div class="jobOffers">
    <div class="slide">
        <img src="https://via.placeholder.com/1920x500" alt="" style="width: 100%;">
    </div>

    @if(\Session::has('success'))
    <div class="alert">{{\Session::get('success')}}</div>
    {{\Session::forget('success')}}
    @endif

    @if(\Session::has('error'))
    <div class="alert">{{\Session::get('error')}}</div>
    {{\Session::forget('errors')}}
    @endif

    <div class="container__base">
        <section class="jobs">
            <h2 data-aos="fade-right" data-aos-duration="800">Nos offres d'emploi</h2>
            <div class="jobs__list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                @foreach(\App\Models\JobOffer::select('title', 'description', 'place', 'type_of_contract')->get() as $job)
                <div class="job">
                    <h3>{{$job->title}}</h3>
                    <p>{{$job->description}}</p>
                    <div class="job__infos">
                        <div>
                            <span><i class="fas fa-map-marker-alt"></i> {{$job->place}}</span>
                            <span><i class="fas fa-file-contract"></i> {{$job->type_of_contract}}</span>
                        </div>
                        <a href="#contact__jobs">Postuler</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="contact__jobs" id="contact__jobs">
            <form method="POST" action="{{route('job.send')}}" enctype="multipart/form-data" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                <h2><span>Demande d'offre d'emploi</span></h2>
                <p></p>
                @csrf
                <div class="input-box">
                    <input type="text" name="name" id="name" placeholder="Nom et Prénom">
                </div>
                @error('name')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                @error('email')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-box">
                    <input type="text" name="phone" id="phone" placeholder="Téléphone">
                </div>
                @error('phone')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="select-box">
                    <select id="job" name="job[]" multiple>
                        <option disabled>Sélectionnez vos offres</option>
                        @foreach(\App\Models\JobOffer::select('id', 'title')->get() as $job)
                        <option value="{{ $job->title }}">
                            {{$job->title}}
                        </option>
                        @endforeach
                    </select>
                </div>
                @error('job')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="file-box">
                    <label>Votre CV & Lettre de motivation</label>
                    <input type="file" id="attachment" name="attachment[]" multiple>

                </div>
                @error('attachment')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-box message-box">
                    <textarea name="message" id="message" placeholder="Ecrivez votre message..."></textarea>
                </div>
                @error('message')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-validation">
                    <input type="checkbox" name="validation_form" id="validation_form">
                    <label for="validation_form">En cochant cette case, vous acceptez que les informations
                        saisies dans ce formulaire soient utilisées dans le cadre de la demande
                        de contact et de la relation commerciale qui peut en découler
                    </label>
                </div>
                @error('validation_form')
                <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="button">
                    <input type="submit" class="submit-btn" value="Envoyer">
                </div>
            </form>
        </section>
    </div>

</div>

@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        $("#job").select2({
            placeholder: "Sélectionnez vos offres"
        });

    });

</script>
@endpush