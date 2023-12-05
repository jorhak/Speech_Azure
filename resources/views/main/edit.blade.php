@extends('layouts.app')

@section('content')
<h1>Mapa</h1>

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubicacionModal">
        Seleccionar Ubicación
    </button>

    <!-- Modal -->
    <div class="modal fade" id="ubicacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar Ubicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Mapa y formulario van aquí -->
                    <div id="map"></div>
                    <form method="POST" action="/guardar-ubicacion">
                        @csrf
                        <input type="hidden" name="longitud" id="longitud">
                        <input type="hidden" name="latitud" id="latitud">
                        <button type="submit" class="btn btn-primary">Guardar Ubicación</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<gmp-map center="40.12150192260742,-100.45039367675781" zoom="4" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="40.12150192260742,-100.45039367675781" title="My location">
      </gmp-advanced-marker>
</gmp-map>
<script src="{{ asset('build/assets/app-72789f24.js') }}"></script>
@endsection
