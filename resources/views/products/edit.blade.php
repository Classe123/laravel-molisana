@extends('layouts.app')
@section('title', 'Modifica Prodotto')
@section('content')
<section class="container bg-white mt-4">
    <h1>Edit</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="{{$product->title}}" required>
            <div id="titleHelp" class="form-text">bhooo</div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control">
            {!! $product->description !!}
           </textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image"  name="image" value="{{$product->image}}">
          </div>
          <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight"  name="weight" value="{{$product->weight}}" required>
          </div>
          <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control" id="cooking_time"  name="cooking_time" value="{{$product->cooking_time}}" required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-control" id="type"  name="type" value="{{$product->type}}" required>
              <option value="corta" {{$product->type === 'corta' ? 'selected' : ''}} >Corta</option>
              <option value="lunga" {{$product->type === 'lunga' ? 'selected' : ''}}>Lunga</option>
              <option value="cortissima" {{$product->type === 'cortissima' ? 'selected' : ''}}>Cortissima</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>


</section>
@endsection
