@extends('layout')
@section('title', 'Tabla de fallas')
@section('content')

<div class="container mt-5 shadow rounded">
  
    <h2> Tabla De Fallas Registradas</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Departamento</th>
                <th scope="col">Nombre del Empleado</th>
                <th scope="col">Resuelto</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
            <th scope='row'>{{$falla->id}}</th>
            <td>{{$falla->description}}</td>
            <td>{{$falla->prioridad}}</td>
            <td>{{$falla->departamento}}</td>
            <td>{{$falla->nombreemple}}</td>
            <td><input type='checkbox' class='check-box'></td>
            </tr>
        </tbody>
    </table>

</div>
@csrf

@endsection
