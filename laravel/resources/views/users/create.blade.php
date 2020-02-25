@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Inicio de formulario--}}
        <div class="col-md-8 offset-md-2">
            <h1 class="h3">
                <i class="fa fa-plus"></i>
                Adicionar Usuario
            </h1>
            <hr>
            {{-- Campo superior para mostrar los mensajes de error --}}
            {{-- @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach($errors->all() as $message)
                    <li> {{ $message }} </li>
                @endforeach
                </div>
            @endif --}}
            {{-- Fin del mensaje --}}

            {{-- Menu Migajas de pan --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Usuario</li>
                </ol>
            </nav>
        <form action="{{url('users')}}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Nombre Completo --}}
                <div class="form-group">
                    <label for="fullname" class="text-md-right">Nombre Completo</label>

                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}"  autocomplete="fullname" autofocus>

                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Correo Electronico --}}
                <div class="form-group">
                    <label for="email" class="text-md-right">Correo Electrónico</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Numero Telefonico--}}
                <div class="form-group">
                    <label for="phone" class="text-md-right">Numero Telefonico</label>

                    <input id="phone" type="texto" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Fecha nacimiento --}}
                <div class="form-group">
                    <label for="birthdate" class="text-md-right">Fecha Nacimiento</label>

                    <input id="birthdate" type="texto" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}"  autocomplete="birthdate">

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

                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
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

                    <input id="address" type="texto" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Photo--}}
                <div class="form-group">
                    <label for="photo" class="text-md-right">Foto</label>
                    <button class="btn btn-indigo btn-block btn-upload @error('address') is-invalid @enderror" type="button">
                        <i class="fa fa-upload"></i>
                        Seleccionar Foto
                    </button>

                    <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror d-none" name="photo" accept="image/*" >
                    <br>
                    {{-- Campo de muestra de imagen --}}
                    <div class="text-center">
                        <img src="{{asset('imgs/nophoto.png')}}" id="preview" class="img-thumbnail" width="120px">
                    </div>

                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Contraseña --}}
                <div class="form-group">
                    <label for="password" class="text-md-right">Contraseña:</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Confirmar Contraseña --}}
                <div class="form-group">
                    <label for="password-confirm" class="text-md-right">Confirmar Contraseña:</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-indigo btn-block">
                        <i class="fa fa-save"></i>
                        Adicionar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
