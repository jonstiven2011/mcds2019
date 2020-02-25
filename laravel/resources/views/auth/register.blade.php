@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">


        <div class="card">
              <img src="{{ asset('imgs/register.png') }}" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title" align="center">
                    <i class="fa fa-user"></i>
                    Registro de Usuarios
                </h3>
                <hr>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- Nombre Completo --}}
                        <div class="form-group">
                            <label for="fullname" class="text-md-right">Nombre Completo</label>

                            <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Correo Electronico --}}
                        <div class="form-group">
                            <label for="email" class="text-md-right">Correo Electrónico</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Numero Telefonico--}}
                        <div class="form-group">
                            <label for="email" class="text-md-right">Numero Telefonico</label>

                            <input id="phone" type="texto" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="email">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Fecha nacimiento --}}
                        <div class="form-group">
                            <label for="birthdate" class="text-md-right">Fecha Nacimiento</label>

                            <input id="birthdate" type="texto" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('email') }}" required autocomplete="email">

                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
{{-- El old lo que hace es recordar el nombre del campo --}}
                        {{-- GENERO --}}
                        <div class="form-group">
                            <label for="gender" class="text-md-right">Genero</label>

                            <select name="gender" id="gender" class="form-control">
                                <option value="">Seleccione...</option>
                                <option value="Male" @if (old('gender') == 'Male') selected @endif>Hombre</option>
                                <option value="Female" @if (old('gender') == 'Female') selected @endif>Mujer</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Direccion--}}
                        <div class="form-group">
                            <label for="address" class="text-md-right">Dirección</label>

                            <input id="address" type="texto" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('email') }}" required autocomplete="email">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Contraseña --}}
                        <div class="form-group">
                            <label for="password" class="text-md-right">Contraseña:</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="text-md-right">Confirmar Contraseña:</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-indigo btn-block">
                                <i class="fa fa-save"></i>
                                Registrarse
                            </button>
                        </div>
                    </form>
              </div>
            </div>

        </div>
    </div>
</div>
@endsection