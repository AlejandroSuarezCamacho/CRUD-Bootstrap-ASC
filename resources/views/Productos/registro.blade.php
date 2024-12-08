@extends('layouts.app')
@section('titulo', 'Registrar producto')
@section('contenido')
    <h1>Registro de producto</h1>

    <a href="{{ route('producto.index') }}">Gestionar productos</a>
    <br><br>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="nombre">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="marca">Marca del producto</label>
        <input type="text" id="marca" name="marca" required>
        <br><br>
        <label for="precio">Precio del producto</label>
        <input type="number" step="0.01" id="precio" name="precio" required>
        <br><br>
        <label for="descripcion">Descripción del producto</label>
        <input type="text" id="descripcion" name="descripcion" required>
        <br><br>
        <button type="submit">Registrar producto</button>
    </form>
@endsection
