@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <div class="col-8 offset-2">
                          <form action="/p" enctype="multipart/form-data" method="post">
                               @csrf 
                               <div class="form-group row">
                                   <label for="caption" class="col-md-4 col-form-label let-principal"><i class="fas fa-edit"></i> DESCRIPCION</label>
                                        <textarea id="caption" 
                                               type="text" 
                                               name="caption"
                                               class="inp-style form-control @error('caption') is-invalid @enderror" 
                                               value="{{ old('caption') }}" 
                                               autocomplete="caption" autofocus>
                                     </textarea>
                                     @error('caption')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
           
                                </div> 
                                <div class="row">
                                     <label for="image" class="col-md-4 col-form-label let-principal"><i class="fas fa-camera"></i> FOTO NUEVA</label>
                                     <input type="file" class="form-control-file" id="image" name="image">
                                     @error('image')
                                     <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                     </span>
                                     @enderror
                                </div>
                               <button class="btn btn-primary mt-5"> Agregar nueva foto</button>
                          </form>
                       </div>
        </div>
</div>
@endsection