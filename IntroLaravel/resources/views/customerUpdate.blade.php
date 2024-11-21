@extends('layouts.plantilla1')

@section('titulo', 'Actualizar cliente')

@section('contenido')   
  {{-- Inicia tarjeta con formulario --}}

  <div class="container mt-5 col-md-6">

    <div class="card font-monospace">
      <div class="card-header fs-5 text-center text-primary">
        {{__('Actualizar registro')}}
      </div>
  
      <div class="card-body text-justify">
        <form action="{{ route('rutaActualizarCliente', ['id' => $cliente->id]) }}" method="POST">
          @csrf
          @method('PUT')
      
          <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre: ')}}</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}" required>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">{{__('Apellido: ')}}</label>
            <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}" required>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo: ')}}</label>
            <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Teléfono: ')}}</label>
            <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}" required>
          </div>
          <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
              <button type="submit" class="btn btn-success btn-sm"> {{__('Actualizar cliente')}} </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
   {{-- divcontainer --}}
{{-- Finaliza Tarjeta con formulario --}}
@endsection