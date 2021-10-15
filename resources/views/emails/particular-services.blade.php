@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header')
           Nouvelle demande de service de <a href="mailto:{{$email}}"> {{$email}}</a> 
        @endcomponent
    @endslot

{{-- Body --}}
<h2>Nom et Prénom :</h2>
<p>{{$name}}</p>
<h2>Email :</h2>
<p>{{$email}}</p>
<h2>Téléphone :</h2>
<p>{{$phone}}</p>
<h2>Service :</h2>
@for($i = 0; $i < count($services); $i++)
<p>{{ $services[$i] }}</p>
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
