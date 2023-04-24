@extends('layouts.auth')

@section('content')
<form action="{{ route('register.create') }}" method="POST">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="display-5"> {{__('Regisztráció')}} </h3>
        </div>
        <div class="card-body">
            <div class="form-floating">
                <input type="text" class="form-control {{ $errors->has('nickname') ? 'is-invalid' : ''}}" placeholder="Name" name='nickname'>
                <label for="floatingInput">{{ __('Becenév') }}</label>
                <p class="invalid-feedback">
                    {{$errors->first('nickname')}}
                </p>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : ''}}" placeholder="Name" name='lastname'>
                <label for="floatingInput">{{ __('Vezetéknév') }}</label>
                <p class="invalid-feedback">
                    {{$errors->first('lastname')}}
                </p>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" placeholder="Name" name='firstname'>
                <label for="floatingInput">{{ __('Utónév') }}</label>
                <p class="invalid-feedback">
                    {{$errors->first('firstname')}}
                </p>
            </div>

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

            <div class="d-grid">
                <button class="btn btn-primary btn-large" type="submit">
                    {{__('Regisztráció')}}
                </button>
           </div>
        </div>
        <div class="card-footer">
            <a class="py-2 d-none d-md-inline-block" href="login">Belépés</a>
        </div>
    </div>
</form>
@endsection