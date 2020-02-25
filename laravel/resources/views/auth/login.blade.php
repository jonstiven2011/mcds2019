@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Inicio Tarjeta login-->
            <div class="card">
            <img src="{{asset('imgs/autentication.png')}}" class="card-img-top">
                <div class="card-body">
                    <h3 class="title" align="center">
                        <i class="fa fa-lock"></i>
                        Ingreso de Usuarios</h3>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!--Campo Correo electronico-->
                        <div class="form-group ">
                            <i class="fa  fa-user"></i>
                            <label for="email" class="text-md-right">Correo Electronico:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <!--Campo Contraseña-->
                        <div class="form-group">
                            <i class="fa  fa-lock"></i>
                            <label for="password" class="text-md-right">Contraseña:</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <!--Boton de envio -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-indigo btn-block">
                                <i class="fa fa-arrow-right"></i>
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--Fin tarjeta login-->
        </div>
    </div>
</div>
@endsection
