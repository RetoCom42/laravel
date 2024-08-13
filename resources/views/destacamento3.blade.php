@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Destacamento 3</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Unidad</th>
                <th>Plantilla</th>
                <th>ESTADO</th>
                <th>CARGO</th>
                <th>GRADO</th>
                <th>NOMBRE Y APELLIDOS</th>
                <th>C.IDENTIDAD</th>
                <th>MUNICIPIO</th>
                <th>DIRECCION</th>
                <th># de Teléfono</th>
                <th>Preparado</th>
                <th>Fecha Preparado</th>
                <th>Recorrido</th>
                <th>Fecha Recorrido</th>
                <th>Causal</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservistas as $reservista)
            <tr>
                <td>{{ $reservista->id }}</td>
                <td>{{ $reservista->Unidad }}</td>
                <td>{{ $reservista->Plantilla }}</td>
                <td>{{ $reservista->ESTADO }}</td>
                <td>{{ $reservista->CARGO }}</td>
                <td>{{ $reservista->GRADO }}</td>
                <td>{{ $reservista->NOMBRE_Y_APELLIDOS }}</td>
                <td>{{ $reservista->C_IDENTIDAD }}</td>
                <td>{{ $reservista->MUNICIPIO }}</td>
                <td>{{ $reservista->DIRECCION }}</td>
                <td>{{ $reservista->TELEFONO }}</td>
                <td>{{ $reservista->Preparado }}</td>
                <td>{{ $reservista->Fecha_Recorrido }}</td>
                <td>{{ $reservista->Causal }}</td>
                <td>{{ $reservista->Observaciones }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection