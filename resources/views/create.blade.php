@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Registro</h1>
    <form action="{{ url('/reservistas') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="unidad" class="form-label">Unidad</label>
            <input type="text" class="form-control" id="unidad" name="unidad" required>
        </div>
        <div class="mb-3">
            <label for="plantilla" class="form-label">Plantilla</label>
            <input type="text" class="form-control" id="plantilla" name="plantilla" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">ESTADO</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">CARGO</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>
        <div class="mb-3">
            <label for="grado" class="form-label">GRADO</label>
            <input type="text" class="form-control" id="grado" name="grado" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE Y APELLIDOS</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="c_identidad" class="form-label">C.IDENTIDAD</label>
            <input type="text" class="form-control" id="c_identidad" name="c_identidad" required>
        </div>
        <div class="mb-3">
            <label for="municipio" class="form-label">MUNICIPIO</label>
            <input type="text" class="form-control" id="municipio" name="municipio" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">DIRECCION</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label"># de Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="preparado" class="form-label">Preparado</label>
            <input type="text" class="form-control" id="preparado" name="preparado" required>
        </div>
        <div class="mb-3">
            <label for="fecha_preparado" class="form-label">Fecha Preparado</label>
            <input type="date" class="form-control" id="fecha_preparado" name="fecha_preparado" required>
        </div>
        <div class="mb-3">
            <label for="recorrido" class="form-label">Recorrido</label>
            <input type="text" class="form-control" id="recorrido" name="recorrido" required>
        </div>
        <div class="mb-3">
            <label for="fecha_recorrido" class="form-label">Fecha Recorrido</label>
            <input type="date" class="form-control" id="fecha_recorrido" name="fecha_recorrido" required>
        </div>
        <div class="mb-3">
            <label for="causal" class="form-label">Causal</label>
            <input type="text" class="form-control" id="causal" name="causal" required>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
