@extends('layouts.plantilla1')


@section('titulo', 'Clientes')

@section('contenido')



  {{-- Inicia tarjetaCliente --}}
  <div class="container mt-5 col-md-8">
    @foreach ($ConsultarClientes as $cliente)

    @session('exito')
    <script>
      Swal.fire({
        title: "Respuesta de servidor",
        text: "{{ $value }}",
        icon: "success"
      });

    </script>
    @endsession

    <div class="card text-justify font-monospace">

      <div class="card-header fs-5 text-primary">
        {{$cliente -> nombre}}
      </div>

      <div class="card-body">
        <h5 class="fw-bold">{{$cliente -> correo}}</h5>
        <h5 class="fw-medium">{{$cliente -> telefono}}</h5>
        <p class="card-text fw-lighter"></p>
      </div>

      <div class="card-footer text-muted">



        <!-- {{-- <a href="{{route('rutaActualizarCliente', $cliente->id)}}" class="btn btn-warning btn-sm" type="submit">{{__('Actualizar')}}</a> --}} -->
        <a href="{{ route('rutaeditaCliente', ['id' =>$cliente->id])}}" type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
        
        <form action="{{ route('rutaeditaCliente', ['id' => $cliente->id]) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="confirmDrop">{{__('Eliminar')}}</button>
        

      </div>

    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}




  </div>{{-- divcontainer --}}

@endsection
