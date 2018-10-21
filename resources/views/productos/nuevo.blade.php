@extends('layouts.app')

@section('content')
        
    	@if(Session::has('mensaje'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>{{Session::get('mensaje')}}</strong>
            </div>
        @endif
        
	   <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar Producto</h4>
          </div>
          <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" name="agregarProducto" method="POST" action="{{ url('productos/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            <label for="descripcion" class="col-md-4 control-label">Categoría</label>

                            <div class="col-md-12">

                            <select class="form-control" id="cat_id" name="cat_id" value="{{ old('cat_id') }}" required>
                                  <option hidden value=""> -- Seleccione una Categoría -- </option>
                                  @foreach($categorias as $categoria)
                                  	<option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                                  @endforeach
                              </select>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>Esta Categoría ya existe!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            <label for="descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>Debe ingresar una descripción!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
                            <label for="marca" class="col-md-4 control-label">Marca</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="marca" value="{{ old('marca') }}" required autofocus>

                                @if ($errors->has('marca'))
                                    <span class="help-block">
                                        <strong>Debe ingresar una marca!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                            <label for="cantidad" class="col-md-4 control-label">Cantidad</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}" required autofocus>

                                @if ($errors->has('cantidad'))
                                    <span class="help-block">
                                        <strong>Debe ingresar una cantidad!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="precio" value="{{ old('precio') }}" required autofocus>

                                @if ($errors->has('precio'))
                                    <span class="help-block">
                                        <strong>Debe ingresar una precio!</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Agregar</button>
                                <a type="button" class="btn btn-primary" href="{{ url('productos') }}">Volver</a>
                            </div>
                        
                    </form>
                </div>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->

@endsection