@extends('layouts.app')

@section('content')
    
        <section>
        <div class="heading-section mb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 ml-sm-5 pl-lg-5 ml-md-5">
                <span class="subheading"> Bienvenido</span>
                <h2 class="mb-4"> Los mejores perfiles</h2>
            </div>
            <div class="col-lg-6 col-md-8">
                          <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle float-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selecciona tu pais</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item contenido-opcion" href="{{route('colombia')}}" ><img src="../img/062-colombia.png" alt="">Colombia</a>
                                        <a class="dropdown-item contenido-opcion" href="{{route('peru')}}"><img src="../img/074-peru.png" alt="">Peru</a>
                                    </div>
                                </li>
            </div>   
        </div>

    </div>
        <!-- Tarjetas de Perfiles -->
            <div class="cards-7 section-gray">
                <div class="container">
               
                    <div class="row"> 
                    @foreach($post as $posts)
                        <div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-image">
                                
                                    <a type="button" class="btn-imagen" href="/profile/{{$posts->id}}"> <img class="img" src="/images/{{$posts->user->profile->image}}">
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
                 {{-- {{$post->links()}} --}}
                 </div>
                </div>
            </div>
        </section>

@endsection