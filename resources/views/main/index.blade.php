@extends('layouts.app')

@section('content')
    
        <section>
            <!-- Tarjetas de Perfiles -->
            <div class="heading-section mb-4">
                <div class="row">
                    <div class="col-lg-4 col-md-12 ml-sm-5 pl-lg-5 ml-md-5">
                        <span class="subheading"> Bienvenido</span>
                        <h2 class="mb-4"> Los mejores perfiles</h2>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="contenedor">
                            <form action="">
                                <div class="selectbox">
                                    <div class="select float-right" id="select">
                                        <div class="contenido-select">
                                            <h1 class="titulo">Selecciona tu pais</h1>
                                        </div>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                        
                                    <div class="opciones" id="opciones">
                                        <a href="#" class="opcion">
                                            <div class="contenido-opcion">
                                                <img src="img/062-colombia.png" alt="">
                                                <div class="textos">
                                                    <h1 class="titulo">Colombia</h1>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="opcion">
                                            <div class="contenido-opcion">
                                                <img src="img/074-peru.png" alt="">
                                                <div class="textos">
                                                    <h1 class="titulo">Peru</h1>
                                                
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="pais" id="inputSelect" value="">
                            </form>
                        </div>  
                    </div>   
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