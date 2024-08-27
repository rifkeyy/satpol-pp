// resources/views/map.blade.php

@extends('layouts.app')

@section('content')
    <div id="map" style="width: 100%; height: 500px;"></div>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -6.1751, lng: 106.8650 },
                zoom: 12
            });
        }
    </script>
@endpush