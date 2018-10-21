@extends('layouts.app')

@section('content')
    
	<div class="row">
        <div class="col-md-12">
            <h1 class="h1-tabla">Productos en carpeta productos</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->categoria->descripcion }}</td>
                            <td>{{ $producto->marca }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>$ {{ $producto->precio }}</td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

@endsection
