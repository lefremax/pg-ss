@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Activar Cuentas</h1>
    @include('common.success')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">pais</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->pais}}</td>
                    <th><a href="{{route('verfoto',$user->id)}}" class="btn btn-warning">Ver</a></th>
                    <th><a href="{{route('activaruser',$user->id)}}" class="btn btn-success">Activar</a></th> 
                    </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>
    
</div>


@endsection