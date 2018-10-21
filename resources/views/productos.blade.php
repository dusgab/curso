@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <h1 class="h1-tabla">Productos</h1>
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
                    @foreach($productos as $p)
                        <tr>
                            <td>{{$p->descripcion}}</td>
                            <td>{{$p->categoria->descripcion}}</td>
                            <td>{{$p->marca}}</td>
                            <td>{{$p->cantidad}}</td>
                            <td>{{$p->precio}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

@endsection
