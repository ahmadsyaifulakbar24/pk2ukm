@extends('layouts/app')

@section('title','Kinerja Anggaran')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Kinerja Anggaran</h4>
			<a href="{{url('dinkot/kinerja-anggaran/update')}}" class="btn btn-sm btn-outline-primary mb-1 none" id="add">Tambah Kinerja Anggaran</a>
			<a href="{{url('dinkot/kinerja-anggaran/update')}}" class="btn btn-sm btn-outline-primary mb-1 none" id="edit">Edit Kinerja Anggaran</a>
		</div>
		<div class="none" id="card">
			<div class="card card-custom mb-4">
				<div class="card-header">
					<h6 class="mb-0">Anggaran DAK Non Fisik PK2UMKM</h6>
				</div>
				<div class="card-body">
	                <div class="row">
	                    <label class="col-form-label col-6">Pagu Anggaran</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="budged"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Realisasi Anggaran Tahap 1</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="budged_realization1"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Realisasi Anggaran Tahap 2</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="budged_realization2"></div>
	                </div>
	            </div>
			</div>
			<div class="card card-custom mb-4">
				<div class="card-header">
					<h6 class="mb-0">Pelatihan</h6>
				</div>
				<div class="card-body">
	                <div class="row">
	                    <label class="col-form-label col-6">Target Peserta</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="target_participant"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Realisasi Peserta Tahap 1</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="realization_participant1"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Realisasi Peserta Tahap 2</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="realization_participant2"></div>
	                </div>
	            </div>
			</div>
			<div class="card card-custom mb-4">
				<div class="card-header">
					<h6 class="mb-0">Pendamping</h6>
				</div>
				<div class="card-body">
	                <div class="row">
	                    <label class="col-form-label col-6">Target Pendamping</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="target_companion"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Realisasi Pendamping</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="realization_companion"></div>
	                </div>
	            </div>
			</div>
			<div class="card card-custom">
				<div class="card-header">
					<h6 class="mb-0">File Realisasi Anggaran</h6>
				</div>
				<div class="card-body">
	                <div class="row">
	                    <label class="col-form-label col-6">Tahap 1</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="document_budged_realization1"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-6">Tahap 2</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-5" id="document_budged_realization2"></div>
	                </div>
	            </div>
			</div>
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
	<script src="{{asset('api/dinkot/kinerja-anggaran.js')}}"></script>
@endsection