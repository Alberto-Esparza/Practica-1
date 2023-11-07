@extends('layouts.app')

@section('content')
  <h1>Listado de Materias</h1>
  <!-- Aquí muestra la tabla de materias y botones de edición y eliminación -->

  <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Completado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->fecha }}</td>
            <td>{{ $materia->completo }}</td>
            <td>
                <a href="{{ route('materias.edit', $materia) }}">Editar</a>
                <form method="POST" action="{{ route('materias.destroy', $materia) }}">
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
