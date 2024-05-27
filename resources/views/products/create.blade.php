@extends('layouts.app')
@section('title', 'Crea Prodotto')
@section('content')
<section class="container">
    <h1>Crea</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" required>
            <div id="titleHelp" class="form-text">bhooo</div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image"  name="image">
          </div>
          <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight"  name="weight" required>
          </div>
          <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control" id="cooking_time"  name="cooking_time" required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-control" id="type"  name="type" required>
              <option value="corta">Corta</option>
              <option value="lunga">Lunga</option>
              <option value="cortissima">Cortissima</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>





</section>
@endsection
