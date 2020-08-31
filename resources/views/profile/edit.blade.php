@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
     <div class="col-8 offset-2">
         <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
         @csrf
         @method('PATCH')

         <div class="form-group row">
         <label for="title" class="col-md-4 col-form-label let-principal">TITULO</label>

                <input id="title" 
                       type="text" 
                       class="inp-style  form-control @error('title') is-invalid @enderror" 
                       name="title" value="{{ old('title') ?? $user->profile->title }}" 
                       autocomplete="title" autofocus>

                    @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
           
        </div>

        <div class="form-group row">
         <label for="description" class="col-md-4 col-form-label let-principal"><i class="fas fa-edit"></i> DESCRIPCION</label>

                <textarea id="description" 
                       type="text" rows="4" cols="50"
                       class="inp-style  form-control @error('description') is-invalid @enderror" 
                       name="description" value="{{ old('description') ?? $user->profile->description}}" 
                       autocomplete="description" autofocus>
                 </textarea>
                    @error('description')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
           
        </div>
        <div class="form-group row">
         <label for="telefono" class="col-md-4 col-form-label let-principal"><i class="fas fa-phone-alt"></i> TELEFONO</label>

                <input id="title" 
                       type="text" 
                       class=" inp-style form-control @error('telefono') is-invalid @enderror" 
                       name="telefono" value="{{ old('telefono') ?? $user->profile->telefono }}" 
                       autocomplete="telefono" autofocus>

                    @error('subtitle')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
           
        </div>
        
        <div class="row">
        <label for="image" class="col-md-4 col-form-label mr-3 let-principal"> <i class="fas fa-camera"></i> FOTO DE PERFIL</label>
        <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                    @enderror
        </div>
        <button class="btn btn-primary mt-5"> GUARDAR </button>
         </form>
     </div>
    </div>
   
</div>
@endsection

