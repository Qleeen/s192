@extends('layouts.plantilla1')

@section('titulo', 'principal')


@section('contenido')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="display-4 text-center mb-6">Descubriendo la Literatura Contemporánea</h1>
            
            <h3 class="text-muted text-center mb-4">Un viaje a través de las páginas de los mejores autores</h3>
            
            <div class="text-center mb-4">
                <img src="{{ asset('imagenes/Imagen4.png') }}" alt="Noticia Literaria" class="img-fluid rounded shadow" style="box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); border-radius: 1rem; width: 500px;">
            </div>

            <p class="lead">
                La literatura contemporánea nos ofrece una perspectiva fresca sobre las complejidades de la sociedad moderna. En este artículo, exploraremos las obras de autores que han dejado una huella imborrable con sus historias llenas de emoción, reflexión y crítica social.
            </p>
            <p>
                Desde las novelas más vendidas hasta los cuentos más premiados, la literatura contemporánea sigue desafiando las normas establecidas, ofreciéndonos nuevas formas de ver el mundo y de entendernos a nosotros mismos.
            </p>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('imagenes/imagen2.png') }}" alt="Imagen 1" class="img-fluid rounded shadow" width="100%">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('imagenes/imagen6.png') }}" alt="Imagen 2" class="img-fluid rounded shadow" width="95%">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('imagenes/imagen3.png') }}" alt="Imagen 3" class="img-fluid rounded shadow" width="85%">
                </div>
            </div>

            <p class="text-muted mt-4">
                Publicado el 30 de octubre de 2024 por <strong>Héctor Baruch Ortiz Quintana</strong>.
            </p>
        </div>
    </div>
</div>

@endsection