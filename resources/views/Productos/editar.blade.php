@extends('layouts.app')
@section('titulo', 'Editar producto')
@section('contenido')
    <h1>Editar producto</h1>

    <a href="{{ route('producto.index') }}">Gestionar productos</a>
    <br><br>
    <form action="{{ route('producto.update', ['id' => $producto->id ]) }}"
        method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}">
        <br><br>
        <label for="marca">Marca del producto</label>
        <input type="text" id="marca" name="marca" value="{{ $producto->marca }}">
        <br><br>
        <label for="precio">Precio del producto</label>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}">
        <br><br>
        <label for="descripcion">Descripción del producto</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}">
        <br><br>
        <button type="submit">Editar producto</button>
    </form>
@endsection
