@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- -------------------------------------------- NOM -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Gerard" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->

                        <!-- -------------------------------------------- COGNOM -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="cognoms" class="col-md-4 col-form-label text-md-right">{{ __('Cognoms') }}</label>

                            <div class="col-md-6">
                                <input id="cognoms" type="text" class="form-control @error('cognoms') is-invalid @enderror" name="cognoms"  placeholder="Garcia" value="{{ old('cognoms') }}" required autocomplete="cognoms">

                                @error('cognoms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->

                        <!-- -------------------------------------------- NIF -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="nif" class="col-md-4 col-form-label text-md-right">{{ __('DNI/NIF') }}</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control @error('nif') is-invalid @enderror" name="nif"  placeholder="00000000A" value="{{ old('nif') }}" required autocomplete="nif">

                                @error('nif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ---------------------------------------------------------------------------------------- -->

                        <!-- -------------------------------------------- SEXE -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                            <div class="col-md-6">

                                <select id="sexe" type="text" class="form-control @error('sexe') is-invalid @enderror" name="sexe" required autocomplete="sexe">
                                    <option value="home">Home</option>
                                    <option value="dona">Dona</option>
                                </select>
                                    
                                @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->

                        <!-- -------------------------------------------- DATA NAIX -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="data_naixement" class="col-md-4 col-form-label text-md-right">{{ __('Data de naixement') }}</label>

                            <div class="col-md-6">

                                <input id="data_naixement" type="date" class="form-control @error('data_naixement') is-invalid @enderror" name="data_naixement" required autocomplete="data_naixement">
                                    
                                @error('data_naixement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->

                        <!-- -------------------------------------------- EMAIL -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correu') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="usuari@servidorcorreu.dom" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->

                        <!-- -------------------------------------------- PASSWORD -------------------------------------------- -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrassenya') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contrassenya') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- ----------------------------------------------------------------------------------------  -->


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
