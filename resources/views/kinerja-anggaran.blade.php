@extends('layouts/app')

@section('title','Kinerja Anggaran')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Kinerja Anggaran</h4>
			<a href="{{ url('unduh-kinerja-anggaran') }}" class="btn btn-sm btn-outline-primary mb-1" target="_blank">Unduh Kinerja Anggaran</a>
		</div>
		<div class="none" id="card">
			<div class="row" id="data"></div>
		</div>
		<div id="loading">
			<div class="d-flex flex-column justify-content-center align-items-center state">
				<div class="loader">
					<svg class="circular" viewBox="25 25 50 50">
						<circle class="path-primary" cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke-miterlimit="10"/>
					</svg>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<!-- <script src="{{asset('assets/js/exportCsv.js')}}"></script> -->
	<script src="{{asset('api/kinerja-anggaran.js')}}"></script>
@endsection