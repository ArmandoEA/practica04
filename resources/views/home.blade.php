@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div>
                        <a href="{{ route('bolsos.index') }}" class="btn btn-info btn-block boton">
                          <br>
                          Administrar Bolsos
                          <br><br>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
