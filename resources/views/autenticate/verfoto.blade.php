@extends('layouts.app')

@section('content')

<div class="cotainer">
    <div class="card">
        <a href="{{route('activaruser',$user->id)}}" class="btn btn-success my-4 mx-4" style="display: inline-block">Activar</a>
        <div class="card-body">
            <section>

                <div class="row">

                    <div class="col-lg-6">
                    <img class="img-fluid" src="{{asset($user->foto_dni)}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{asset($user->file_dni)}}" alt="">
                    </div>
 
                </div>
            </section>
        </div>
    </div>
</div>


@endsection