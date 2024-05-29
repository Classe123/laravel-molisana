@extends('layouts.app')
@section('title', 'Crea Prodotto')
@section('content')
<section class="container">
    <h1>Crea</h1>
 <div>
     {{-- @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     @endif --}}
 </div>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title" value="{{old('title')}}" required maxlength="255" minlength="3">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"  name="image" value="{{old('image')}}">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control  @error('weight') is-invalid @enderror" id="weight"  name="weight" value="{{old('weight')}}" required>
            @error('weight')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control @error('cooking_time') is-invalid @enderror" id="cooking_time"  name="cooking_time" value="{{old('cooking_time')}}" required>
            @error('cooking_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="type" class="form-label" >Tipo</label>
            <select class="form-control  @error('type') is-invalid @enderror" id="type"  name="type" value="{{old('type')}}" required>
              <option value="corta">Corta</option>
              <option value="lunga">Lunga</option>
              <option value="cortissima">Cortissima</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>





</section>
@endsection
