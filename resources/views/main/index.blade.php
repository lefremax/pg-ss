@extends('layouts.app')

@section('content')
   
        <section>
            <!-- Tarjetas de Perfiles -->
            <div class="heading-section mb-4">
                <div class="pl-lg-5 ml-md-5">
                    <span class="subheading"> Bienvenido</span>
                    <h2 class="mb-4"> Los mejores perfiles</h2>
                </div>
            </div>
            <div class="cards-7 section-gray">
                <div class="container">
               
                    <div class="row"> 
                    @foreach($post as $posts)
                        <div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-image">
                                
                                    <a type="button" class="btn-imagen" href="/profile/{{$posts->id}}"> <img class="img" src="{{$posts->user->profile->profileImage()}}">
                                    </a>
                               
                                </div>
                                <div class="table">
                                    <h4 class="card-caption">{{$posts->user->username}}</h4>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
                <div class="row">
                 <div class="col-12 d-flex justify-content-center">
                 {{$post->links()}}
                 </div>
                </div>
            </div>
        </section>

@endsection