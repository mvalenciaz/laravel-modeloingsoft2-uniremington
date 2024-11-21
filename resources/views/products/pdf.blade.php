<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto {{ $product->id}}</title>
    <style>
        tr{
            border:1px solid black;
        }
        th{
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h1>Informacion del Producto {{ $product->name }}</h1>
<table class="table caption-top">
    <thead>
        <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Proveedor</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tr>
        <th>{{$product->id }}</th>
        <th>{{$product->code }}</th>
        <th>{{$product->name }}</th>
        <th>{{$product->price }}</th>
        <th>{{$product->ammount }}</th>
        <th>{{$product->supplier }}</th>
        <th>{{$product->description }}</th>
    </tr>
</table>
    
</body>
</html>