@extends('layouts.plantilla1')

@section('titulo', 'Componentes')  
@section('contenido')

 <x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Enviar">
    Soy el texto del primer componente
</x-Card>

 <x-Card encabezado="Componente2" titulo="Dinamico" textoBoton="NO enviar">
     Bienvenidos al himalaya
</x-Card>

<x-Alert tipo="success"> verde </x-Alert>
<x-Alert tipo="primary"> azul </x-Alert>
<x-Alert tipo="danger"> rojo </x-Alert>
@endsection