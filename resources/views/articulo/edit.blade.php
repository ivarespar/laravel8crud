@extends('layouts.plantillabase');      <!-- Uso plantillabase como contenedor -->

@section('contenido')                   <!-- inserto todo lo siguiente dentro de la sección CONTENIDO en plantillabase -->

<h2>Editar registros</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" id="precio" name="precio" class="form-control" step="any" tabindex="4" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary"  tabindex="6">Guardar</a>

</form>

@endsection