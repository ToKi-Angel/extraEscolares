@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Agregar alumno</p>

    <div class="container">
        <form class="g-3 fs-4" action="store" method="post">
            <div class="row">
                @csrf
                @method('POST')
                <div class="col-3">
                    <label for="id" class="form-label">Matrícula</label>
                    <input type="number" id="id" name="id" class="form-control"
                        placeholder="Ingresa tu número de control" required>
                </div>
                <div class="col-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="paterno" class="form-label">Paterno</label>
                    <input type="text" id="paterno" name="paterno" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="materno" class="form-label">Materno</label>
                    <input type="text" id="materno" name="materno" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="procedencia" class="form-label">Escuela de procedencia</label>
                    <input type="text" id="procedencia" name="procedencia" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control"
                        placeholder="Ingresa tu número de teléfono" required>
                </div>
                <div class="col-3">
                    <label for="tipo" class="form-label">Carrera</label>
                    <select name="tipo" id="tipo" class="form-select" required>
                        @foreach (['SIS', 'GES', 'IND'] as $tipo)
                            <option value="{{ $tipo }}">{{ $tipo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="fechaIngreso">Fecha de ingreso</label>
                    <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control" required>
                </div>
            </div>


            <div class="row">


                <h1 class="mt-3 mb-3">Créditos</h1>

                <div class="col-3">
                    <label for="horaCivica" class="form-label">Horas Cívicas</label>
                    <input type="number" name="horaCivica" id="horaCivica" class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">MOOC</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">Evidencias</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="horaDeportiva" class="form-label">Horas Deportivas</label>
                    <input type="number" name="horaDeportiva" id="horaDeportiva" class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">MOOC</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">Evidencias</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="horaCultural" class="form-label">Horas Culturales</label>
                    <input type="number" name="horaCultural" id="horaCultural" class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">MOOC</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3 text-center">
                    <label for="archivos" class="form-label">Evidencias</label>
                    <input type="file" id="archivos" name="archivos[]" multiple class="form-control">
                </div>
                <div class="col-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="1"></textarea>
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <div class="col text-center">
                    <button class="btn btn-primary mt-3">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
