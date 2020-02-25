<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
            <!-- Tabla de contenido-->
            <table class="table table-inverse table-borderred table-hover table-striped">
                <thead>
                    <th>Nombre Completo</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Genero</th>
                    <th>Dirección</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->birthdate}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->address}}</td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
    
</body>
</html>
<!---->
