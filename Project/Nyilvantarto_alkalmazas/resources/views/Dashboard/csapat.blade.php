@extends('layouts.index')

@section('content')
<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Csapatok</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <h3 style="text-align: center;">Hozz létre egy új csapatot vagy várj amíg nem addnak hozzá egyhez!</h3>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- START ROW -->
            <div class="row">
                <div class="col-xl-12">
                        <form action="{{ route('team.create') }}" method="POST">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="display-5"> {{__('Csapat Létrehozása')}} </h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-floating">
                                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Team's Name" name='name'>
                                        <label for="floatingInput">{{ __('Csapat Név') }}</label>
                                        <p class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </p>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" placeholder="Description" name='description'>
                                        <label for="floatingInput">{{ __('Leírás') }}</label>
                                        <p class="invalid-feedback">
                                            {{$errors->first('description')}}
                                        </p>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-large" type="submit">
                                            {{__('Létrehozás')}}
                                        </button>
                                </div>
                                </div>
                                <div class="card-footer">
                                    <a>Ha már benne vagy egy csapatban!</a>
                                    <a class="py-2 d-none d-md-inline-block" href="{{ route ('topic.show', 'addMember')}}">Kattints Ide!</a>
                                </div>
                            </div>
                        </form>         

                </div>
            </div>
            <!-- content -->
@endsection
