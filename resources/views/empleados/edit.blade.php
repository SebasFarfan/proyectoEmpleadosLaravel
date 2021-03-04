@extends('layouts.app')
@section('content')
<div class="container">
    Seccion para editar Empleados
    <form action="{{ url('/empleados/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    @include('empleados.form',['Modo'=>'editar'])

</form>

</div>

@endsection


