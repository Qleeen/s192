@extends('layouts.plantilla1')

@section('titulo', 'Formulario')  
@section('contenido')

  <div class="container mt-5 col-md-6">


    @if (session('exito'))
    
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>

    @endif

    @session('exito')
    <script>
      Swal.fire({
        title: "Respuesta de servidor",
        text: "{{ $value }}",
        icon: "success"
      });

    </script>
    @endsession
    
    
    <div class="card font-monospace">

      <div class="card-header fs-5 text-center text-primary">
        {{__('Registro Clientes')}}
      </div>

      <div class="card-body text-justify">
        <form action="{{ route('enviaCliente') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre')}}: </label>
            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">{{__('Apellidos')}}: </label>
            <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtapellido') }}</small>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correos')}}: </label>
            <input type="mail" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono: </label>
            <input type="number" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
            <small class="first-italic text-danger">{{ $errors->first('txttelefono') }}</small>
          </div>

      </div>
      <div class="card-footer text-muted> class=">

        <div class="d-grip gap-2 mt-2 mb-1">
          <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Clientes')}}</button>
        </div>
      </form>
      </div>
    </div>
  </div>  

@endsection