@extends('layouts.auth')

@section('content')
<form action="{{ route('login.user') }}" method="POST">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="card">
        <div class="card-header">
            <img class="mb-4" src="https://i.pinimg.com/originals/97/21/05/972105c5a775f38cf33d3924aea053f1.jpg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Kérlek lépj be</h1>
        </div>
        <div class="card-body">
            <div class="form-floating">
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="name@example.com" name='email'>
                <label for="floatingInput">{{ __('Email') }}</label>
                <p class="invalid-feedback">
                    {{$errors->first('email')}}
                </p>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" name='password'>
                <label for="floatingPassword">{{ __('Jelszó') }}</label>
                <p class="invalid-feedback">
                    {{$errors->first('password')}}
                </p>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Emlékezz rám!!!
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Belépés</button>
            
        </div>
        <div class="card-footer">
            <a class="py-2 d-none d-md-inline-block" href="signup">Regisztráció</a>
        </div>
    </div>
    </form>
@endsection
  