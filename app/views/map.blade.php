@extends('layouts.base')

@section('body')
	@include('header')
	@include('menu')
     
     <div id="map"></div>

     <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
     <script>

		var map = L.map('map').setView([38.893,-77.014], 13);

		L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
			id: 'examples.map-9ijuk24y'
		}).addTo(map);

		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(map);
		}

		map.on('click', onMapClick);

	</script>
    @include('footer')
@stop