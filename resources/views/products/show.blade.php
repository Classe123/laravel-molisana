@extends('layouts.app')
@section('title', $product->title)
@section('content')
<section class="container bg-white mt-4">
    <h1 class="text-center">{{$product->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$product->image}}" class="img-fluid" alt="{{$product->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$product->description!!}</p>
            <div>
                Tipo: {{$product->type}}
            </div>
            <div>
                Peso: {{$product->weight}}
            </div>
            <div>
                Cottura: {{$product->cooking_time}}
            </div>
            <div>
                <a href="{{route('products.edit', $product->id )}}" class="btn btn-primary">Modifica</a>
                <form  action="{{ route('products.destroy', $product->id) }}"  method="POST" class="d-inline">
                    @csrf
                    {{-- aggiungiamo il metodo --}}
                    @method('DELETE')
                    <input type="submit" value="Rimuovi" class="btn btn-danger" id="comicDelete">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler eliminare questo prodotto?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary">Si, cancella</button>
        </div>
      </div>
    </div>
  </div>
@endsection
