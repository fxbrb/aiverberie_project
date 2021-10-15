@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header')
            Nouvelle demande d'emploi de <a href="mailto:{{$email}}"> {{$email}}</a> 
        @endcomponent
    @endslot

{{-- Body --}}

<h2>Nom et Prénom :</h2>
<p>{{$name}}</p>
<h2>Email :</h2>
<p>{{$email}}</p>
<h2>Téléphone :</h2>
<p>{{$phone}}</p>
<h2>Offre d'emploi :</h2>
@for($i = 0; $i < count($jobs); $i++)
<p>{{ $jobs[$i] }}</p>
@endfor
<h2>Message :</h2>
<p>{{$message}}</p>

{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}.
        @endcomponent
    @endslot

@endcomponent