@extends('layouts.app')

@section('content')
<h1>Ubicaciones</h1>

    @foreach ($ubicaciones as $ubicacion)
        <div>
            <p>{{ $ubicacion->latitud }}, {{ $ubicacion->longitud }}</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubicacionModal{{ $ubicacion->id }}">
                Ver Detalles
            </button>

            <!-- Modal -->
            <div class="modal fade" id="ubicacionModal{{ $ubicacion->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalles de Ubicación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenedor para el mapa -->
                            <div id="map{{ $ubicacion->id }}" style="height: 300px;"></div>
			    <script>
			    	var map{{$ubicacion->id}};
				var marker{{$ubicacion->id}};
				map = new google.maps.Map(document.getElementById('map{{$ubicacion->id}}'), {
                			center: {lat: {{$ubicacion->latitud}}, lng:{{$ubicacion->longitud}} },
                			zoom: 8
            			});

            			marker{{$ubicacion->id}} = new google.maps.Marker({
                			map: map,
                			draggable: false,
                			animation: google.maps.Animation.DROP,
                			position: {lat: {{$ubicacion->latitud}}, lng: {{$ubicacion->longitud}} }
            			});

			    </script>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
