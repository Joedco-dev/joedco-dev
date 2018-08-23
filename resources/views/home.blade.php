@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mensaje</div>

                <div class="panel-body">Inicio de sesión correcto
                	<meta http-equiv="Refresh" content="1;{{ route('index') }}">	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
