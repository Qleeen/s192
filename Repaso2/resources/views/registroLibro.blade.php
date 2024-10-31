@extends('layouts.plantilla1')

@section('titulo', 'Registro de Libro')

@section('contenido')



<div class="container mt-5">


@if (session('exito'))
    
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>

    @endif


    <h2 class="mb-4">Registrar Nuevo Libro</h2>
    <form action="/enviarLibro" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtisbn') }}</small>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
            <small class="first-italic text-danger">{{ $errors->first('txttitulo') }}</small>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtautor') }}</small>
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="number" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtpaginas') }}</small>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" name="txtanio" value="{{ old('txtanio') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtanio') }}</small>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
            <small class="first-italic text-danger">{{ $errors->first('txteditorial') }}</small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtemail') }}</small>
        </div>
        <button type="submit" class="btn btn-danger">Registrar Libro</button>
    </form>
</div>

@endsection
