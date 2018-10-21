@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a type="button" class="btn btn-primary" href="{{ url('perfil') }}">Perfil</a>
                    <a type="button" class="btn btn-primary" href="{{ url('productos') }}">Productos</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sesión iniciada existosamente!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
