@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <h1 class="h1-tabla">Productos</h1>
            <a class="btn btn-success" type="button" href="{{ url('productos/agregar') }}" style="margin-bottom: 10px;">Agregar</a>
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
                    
                    @foreach($productos as $p)
                        <form method="GET" action="/productos/eliminar/{{$p->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$p->id}}">
                        <tbody>
                        <tr>
                            <td>{{ $p->descripcion }}</td>
                            <td>{{ $p->categoria->descripcion }}</td>
                            <td>{{ $p->marca }}</td>
                            <td>{{ $p->cantidad }}</td>
                            <td>$ {{ $p->precio }}</td>
                        </tr>
                        </tbody>
                        </form>
                    @endforeach
                    
                </table>
               
            </div>
        </div>
    </div>

@endsection
