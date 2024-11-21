@extends('layouts.plantilla')

@section('title', 'Index de Productos')


@section('content')


    <a href="{{ route('products.create') }}" class="btn btn-outline-success mt-2 btn-lg">Nuevo Producto</a>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->ammount }}</td>
                    <td>{{ $product->supplier }}</td>
                    <td>{{ $product->description }}</td>
                    <td class="d-flex justify-content-start gap-2">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning">Editar</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" role="button">Borrar</button>
                        </form>
                        <a href="{{ route('pdf', $product->id)}}" target="_blank" class="btn btn-outline-primary"> PDF</a>
                        </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $products->links() }}
    </div>
@endsection
