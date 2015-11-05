@extends('master-login')

@section('content')

<div class="container">

    <form class="form-signin" method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading text-center">Anmelden</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email Adresse" required="" name="email" value="{{ old('email') }}" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" value="remember-me"> Anmeldung merken
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Nattha kennenlernen</button>

        @if (count($errors) > 0)
            <ul id="error" class="list-unstyled text-center" style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>

</div>

    @stop