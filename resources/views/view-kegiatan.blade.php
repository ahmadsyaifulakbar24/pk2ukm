@extends('layouts/app')

@section('title','Data Kegiatan')

@section('content')
	<div class="container container-compose">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4 id="title">Data Kegiatan</h4>
			<div class="btn btn-sm btn-outline-primary mb-1">Unduh Peserta Lengkap</div>
		</div>
		<div class="none" id="card">
			<div class="card card-custom mb-4">
				<div class="card-body">
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Jenis Pelatihan</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="training_type"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Judul Pelatihan</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="training_title"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Tempat Pelaksanaan</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="place"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Tanggal Pelaksanaan</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="date"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Kab/Kota Kegiatan</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="districts_city"></div>
	                </div>
	                <div class="row">
	                    <label class="col-form-label col-lg-3 col-5">Provinsi</label>
	                    <div class="col-form-label col text-center">:</div>
	                    <div class="col-form-label col-lg-8 col-6" id="province"></div>
	                </div>
	            </div>
	        </div>
			<div class="card card-custom none" id="data">
				<div class="table-custom">
					<div class="table-responsive">
						<table class="table table-middle">
							<thead>
								<tr class="none" id="dinkot">
									<th class="text-center">No.</th>
									<th class="text-truncate">Nama Lengkap</th>
									<th class="text-truncate">Jenis Kelamin</th>
									<th class="text-truncate">Usia</th>
									<th class="text-truncate">Telp/HP</th>
									<th class="text-truncate"></th>
									<th class="text-truncate"></th>
								</tr>
								<tr class="none" id="admin">
									<th class="text-center">No.</th>
									<th class="text-truncate">Nama Lengkap</th>
									<th class="text-truncate">Jenis Kelamin</th>
									<th class="text-truncate">Usia</th>
									<th class="text-truncate">Telp/HP</th>
								</tr>
							</thead>
							<tbody id="table"></tbody>
						</table>
					</div>
				</div>
				<div class="card-footer" id="pagination">
					<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
						<small class="text-secondary pb-3 pb-md-0" id="pagination-label"></small>
						<nav>
							<ul class="pagination pagination-sm mb-0" data-filter="request">
								<li class="page page-item disabled" id="first">
									<span class="page-link"><i class="pr-0 mdi mdi-chevron-double-left"></i></span>
								</li>
								<li class="page page-item disabled" id="prev">
									<span class="page-link"><i class="pr-0 mdi mdi-chevron-left"></i></span>
								</li>
								<li class="page page-item" id="prevCurrentDouble"><span class="page-link"></span></li>
								<li class="page page-item" id="prevCurrent"><span class="page-link"></span></li>
								<li class="page page-item" id="current"><span class="page-link"></span></li>
								<li class="page page-item" id="nextCurrent"><span class="page-link"></span></li>
								<li class="page page-item" id="nextCurrentDouble"><span class="page-link"></span></li>
								<li class="page page-item" id="next">
									<span class="page-link"><i class="pr-0 mdi mdi-chevron-right"></i></span>
								</li>
								<li class="page page-item" id="last">
									<span class="page-link"><i class="pr-0 mdi mdi-chevron-double-right"></i></span>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="compose none">
			<a href="{{url('peserta/create/'.$id)}}" class="btn btn-sm btn-primary d-flex align-items-center shadow">
				<i class="mdi mdi-plus mdi-18px"></i> Tambah Peserta
			</a>
		</div>
		<div class="none" id="empty">
			<div class="d-flex flex-column justify-content-center align-items-center pt-5">
				<i class="mdi mdi-account-group-outline mdi-48px pr-0"></i>
				<h5>Belum ada list peserta</h5>
				<!-- <p class="text-secondary">Buat Project untuk membuat Project baru.</p> -->
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
	<script>const id = {{$id}}</script>
	<script src="{{asset('api/view-kegiatan.js')}}"></script>
@endsection