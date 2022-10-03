@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
        <img src="{{ url('login_form/img/Logo.png') }}">
            <h4 class="title">Dinas Komunikasi dan Informatika Kabupaten Tolitoli</h4>
            <br>
            <div class="input-div one">
                <div class="i">
                     <i class="fas fa-user"></i>
                </div>
                    <div class="div mt-5">
                            <h5>Email</h5>
                            <input type="email" id="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

            </div>
            <div class="input-div pass">
                <div class="i"> 
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            </div>
            <a href="{{ route('password.request') }}">Lupa Password?</a>
            <button type="submit" class="btn">{{ __('Login') }}
            </button>
</form>
       
@endsection
