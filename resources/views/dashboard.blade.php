@extends('layouts/app')

@section('title','Dashboard')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Kinerja DAK Nonfisik PK2UKM TA. 2021</h4>
		</div>
		<div class="row">
			<div class="col-md-6 col-xl-4 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Realisasi Anggaran</h6>
						<div class="d-flex justify-content-between align-items-center">
							<i class="mdi mdi-cash-multiple text-primary mdi-36px"></i>
							<h5 class="mb-0" id="realisasi_anggaran"></h5>
						</div>
						<div class="text-secondary text-right" id="persentase_anggaran"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-4 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Realisasi Peserta</h6>
						<div class="d-flex justify-content-between align-items-center">
							<i class="mdi mdi-account-group-outline text-primary mdi-36px"></i>
							<h5 class="mb-0" id="realisasi_peserta"></h5>
						</div>
						<div class="text-secondary text-right" id="persentase_peserta"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-4 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Realisasi Pendamping</h6>
						<div class="d-flex justify-content-between align-items-center">
							<i class="mdi mdi-account-supervisor-outline text-primary mdi-36px"></i>
							<h5 class="mb-0" id="realisasi_pendamping"></h5>
						</div>
						<div class="text-secondary text-right" id="persentase_pendamping"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Rekapitulasi per Provinsi</h6>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Peserta Berdasarkan Jenis Kelamin</h6>
						<canvas id="chartGender"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Peserta Berdasarkan Agama</h6>
						<canvas id="chartReligion"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-12 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Peserta Berdasarkan Jenis Pelatihan</h6>
						<canvas id="chartTraining"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Peserta Berdasarkan Pendidikan Terakhir</h6>
						<canvas id="chartEducation"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div class="card card-custom">
					<div class="card-body">
						<h6>Peserta Berdasarkan Status Peserta</h6>
						<canvas id="chartStatus"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<!-- <script src="{{asset('assets/js/exportCsv.js')}}"></script> -->
	<script src="{{asset('assets/js/chart.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('api/dashboard.js')}}"></script>
@endsection