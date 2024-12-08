@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')
    <h1>Gestionar los productos</h1>
    <a href="{{ route('producto.create') }}">Registrar producto</a>
    <br><br>
    <table>
        <thead>
            <th>N°</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td>{{ /* $p->id */ $loop->iteration }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>
                        <a href="{{ route('producto.edit', ['id'=>$p->id]) }}">Editar</a>

                        |

                        <form
                            action="{{ route('producto.destroy', ['id'=>$p->id]) }}"
                            method="POST"
                            onsubmit="return confirm('¿Está seguro/a de querer borrar el producto?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
