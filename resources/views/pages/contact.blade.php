@extends('layouts.index')

@section('content')
    @include('partials.headercontact')
	<!-- Google map -->
	<div class="map" id="map-area"></div>
    @include('partials.contact')
@endsection