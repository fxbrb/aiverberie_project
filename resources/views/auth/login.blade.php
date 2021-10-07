@extends('layouts.app')

@section('content')
<div class="container__base">
    <div class="login-form">
        <h3>Connexion</h3>
        <form method="POST" action="{{ route('login.user') }}">
            @csrf
            <div class="form__group">
                <input type="text" placeholder="Email" class="form__field" id="email" name="email" required autofocus>
                <label for="email" class="form__label">Email</label>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form__group">
                <input type="password" placeholder="Password" class="form__field" id="password" name="password" required>
                <label for="password" class="form__label">Mot de passe</label>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form__group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember">Se souvenir de moi
                    </label>
                </div>
            </div>

            <div class="btn__container">
                <button type="submit">Signin</button>
            </div>
        </form>
    </div>
</div>






@endsection