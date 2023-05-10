@extends('layouts.index')

@section('content')
<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Értékelés</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

            <!-- START NEW ROW -->
            <div class="row">
                <div class="col-xl-12">
                <form action="{{ route('ratingChoice') }}" method="POST">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="display-5"> {{__('Csapat Kiválasztása')}} </h3>
                                </div>
                                <div class="card-body">
                                    <div>
                                    <label for="floatingInput">{{ __('Csapatnév') }}</label>
                                                <select name="name" class="form-control">
                                                <option>Válaszd ki a csapatot!</option>
                                                @foreach($team as $t)
                                                    <option value="{{($t->name)}}"> {{($t->name)}}</option>
                                                @endforeach
                                            </select>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-large" type="submit">
                                            {{__('Kiválaszt')}}
                                        </button>
                                </div>
                                </div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </form>
                        
                        
                        <div class="form-group" style="{{ $showDiv ? 'visibility: visible;' : 'visibility: hidden;' }}" id="hideDiv">
                                                    <form action="{{ route('rating') }}" method="POST">
                                                    @csrf
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div>
                                                            <label for="floatingInput">{{ __('Értékelni kivánt személy') }}</label>
                                                                        <select name="ratee_name" class="form-control">
                                                                        <option>Válaszd ki az értékelni kivánt személyt!</option>
                                                                        @foreach ($teamMember->pluck('user_id')->unique() as $userId)
                                                                            @if ($teamMember->where('user_id', $userId)->first()->team_id == $selectedTeamId)
                                                                                <option value="{{ $userId }}">{{ $userId }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                            </div>
                                                            <div>
                                                            <label for="floatingInput">{{ __('Értékelés') }}</label>
                                                                        <select name="score" class="form-control">
                                                                        <option>Válaszd ki az eredményt!</option>
                                                                        @for($i = 1; $i <= 10; $i++)
                                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                                        @endfor
                                                                        </select>

                                                                    </select>
                                                            </div>
                                                            <div class="form-floating">
                                                                <label for="floatingInput">{{ __('Ok') }}</label>
                                                                <input type="text" class="form-control {{ $errors->has('reason') ? 'is-invalid' : ''}}" placeholder="Description" name='reason'>
                                                                
                                                                <p class="invalid-feedback">
                                                                    {{$errors->first('reason')}}
                                                                </p>
                                                            </div>
                                                            <div>
                                                            <div class="d-grid">
                                                                <button class="btn btn-primary btn-large" type="submit">
                                                                    {{__('Értékelés')}}
                                                                </button>
                                                        </div>
                                                        </div>
                                                    </div>
                                            </form> 
                                        </div> 
                </div>
            </div>

@endsection



