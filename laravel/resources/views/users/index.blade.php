@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{-- Boton adicionar usuario --}}
            <a href="{{url('users/create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>Adicionar Usuario
            </a>
            <br><br>
         {{-- Tabla --}}
            <table class="table table-inverse table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Correo Electronico</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td><img src="{{asset($user->photo)}}" width="40px"></td>
                            <td>
                            <a href="{{ url('users/'.$user->id) }}" class="btn btn-indigo btn-sm"> <i class="fa fa-search"></i> </a>
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-indigo btn-sm"> <i class="fa fa-pen"></i> </a>
                                <a href="" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            {{-- Para paginar --}}
                            {{$users->links()}}
                        </td>
                    </tr>
                </tfoot>
            </table>
            
        </div>
    </div>
</div>
@endsection
