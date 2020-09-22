@extends('layouts.app')

@section('content')
<div class="container">
    @if ($user->active == 0)

    <div class="alert alert-warning" role="alert">
        <strong>¡Tu perfil se mostrara publico al verificar que los datos suministrados sea reales!</strong>
    </div>
        
    @endif
<section class="section-1 container-fluid p-0">
        <div class="cover">
            <div class="content text-center">
                <h1>{{$user->profile->title}}</h1>
            </div>
        </div>
    <!--    <div class="container-fluid text-center">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect">
                    <h1>{{ $user->profile->followers->count()}}</h1>
                    <p>Seguidores</p>
                </div>
                <div class="rect">
                    <h1>{{$user->posts->count()}}</h1>
                    <p>Contenido</p>
                </div>
            </div>
        </div> -->

    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5  img">
                <img src="{{ $user->profile->profileImage()}}" class="w-100">
                </div>
                <div class="col-md-7 p-4 p-md-5">
               
               @can ('update', $user->profile)
                <a href="/profile/{{ $user->id}}/edit"><i class="fas fa-edit mr-2"></i>  Editar Perfil</a>
                @endcan

                  <div class="d-flex align-items-center">
                      <div class="heading-section">
                          <span class="subheading">{{$user->name}}</span>
                          <h2 class="mb-4">Descripcion</h2>
                      </div>
                      <!-- <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button> -->
                  </div>

                    <div class="justify-content-center descp">
                        <p>{{ $user->profile->description}}</p>
                    </div>
                    <div class="container-fluid d-flex p-3 ">
                    <i class="fas fa-phone-alt mr-2"></i>
                    <p>{{$user->profile->telefono}}</p>
                    </div>
                  <!--  <div class="d-flex" ><i class="fas fa-calendar-alt"></i><p>{{$user->profile->hora}}</p></div></div> -->
            </div>
        </div>
    </section>
    <section>
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section">
                <span class="subheading">GALERIA</span>
                <h2 class="mb-4">galeria</h2>
            </div>
            
        @can ('update', $user->profile)
        <a href="/p/create"><i class="fas fa-plus-circle mr-2"></i> Agregar Foto</a>
        @endcan
        </div>


  <div id="row"> 
      <div id="portfolio">  
      
      @foreach($user->posts as $post)
     
      <div class="project">
               
               <img  type="button" data-toggle="modal" data-target="#FotoModal-{{$post->id}}" src="/storage/{{ $post->image}}" />
               
               @can ('update', $user->profile)
               <form action="/profile/{{$post->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('DELETE')
                  <div class="multi-button">
                     <button><i class="fas fa-trash-alt"></i></button>
                <!-- <button ><i class="fas fa-edit"></i></button>-->
                   </div>
                </form>
              @endcan
            </div>
      <!-- Modal -->
<div class="modal fade" id="FotoModal-{{$post->id}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="m-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
          <div class="mdalfoto">
              <img class="w-100"src="/storage/{{$post->image}}" />
              <div class="dcap">
                  <p class="pdd">{{$user->username}}</p>
                 <p> {{$post->caption}} </p>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
      @endforeach

     </div> 
 </div>


    </section>

    

</div>

@endsection
