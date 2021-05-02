@extends('layouts/app')

@section('title','Data Peserta')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4 id="title">Data Peserta</h4>
			<a href="{{ url('unduh-profile-peserta/'.$id) }}" class="btn btn-sm btn-outline-primary mb-1" target="_blank">Unduh Profile</a>
		</div>
		<div class="none" id="card">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Foto Peserta</h6>
						</div>
						<div class="card-body text-center">
							<img src="{{asset('assets/images/user.png')}}" class="rounded-circle mb-3 profile_photo" width="150" data-toggle="modal" data-target="#modal-photo" role="button">
							<h5 class="nama">Dwi Mei Yani</h5>
							<div class="text-secondary id_number">3213304205770005</div>
						</div>
					</div>
				</div>
				<form class="col-lg-8">
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Data Peserta</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="name" class="col-form-label col-5 col-md-4">Nama Lengkap</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 nama"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="id_number" class="col-form-label col-5 col-md-4">Nomor KTP</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 id_number"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="gender" class="col-form-label col-5 col-md-4">Jenis Kelamin</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="gender"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="place_birth" class="col-form-label col-5 col-md-4">Tempat Lahir</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="place_birth"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="date_birth" class="col-form-label col-5 col-md-4">Tanggal Lahir</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="date_birth"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="religion_id" class="col-form-label col-5 col-md-4">Agama</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="religion_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="education_id" class="col-form-label col-5 col-md-4">Pendidikan Terakhir</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="education_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="province_id" class="col-form-label col-5 col-md-4">Provinsi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="province_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="districts_city_id" class="col-form-label col-5 col-md-4">Kab/Kota</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="districts_city_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="phone_number" class="col-form-label col-5 col-md-4">Telp/HP</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="phone_number"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="email" class="col-form-label col-5 col-md-4">Email</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="email"></div>
			                </div>
			            </div>
			        </div>
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Data Koperasi atau UMKM Peserta</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="business_status_id" class="col-form-label col-5 col-md-4">Status Usaha</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="business_status_id"></div>
			                </div>
			            </div>
			        </div>
					<div class="card card-custom mb-4 none" id="umkm">
						<div class="card-header">
							<h6 class="mb-0">Data UMKM</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="name_umkm" class="col-form-label col-5 col-md-4">Nama UMKM</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="name_umkm"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="address_umkm" class="col-form-label col-5 col-md-4">Alamat UMKM</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="address_umkm"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="business_sector_id" class="col-form-label col-5 col-md-4">Sektor UMKM</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="business_sector_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="date_establishment_umkm" class="col-form-label col-5 col-md-4">Tanggal UMKM Didirikan</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="date_establishment_umkm"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="no_iumk" class="col-form-label col-5 col-md-4">Nomor IUMK</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="no_iumk"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="position_umkm_id" class="col-form-label col-5 col-md-4">Jabatan di UMKM</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="position_umkm_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="business_turnover" class="col-form-label col-5 col-md-4">Volume (Omset) Usaha</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="business_turnover"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="number_employees" class="col-form-label col-5 col-md-4">Jumlah Karyawan</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="number_employees"></div>
			                </div>
		                </div>
		            </div>
					<div class="card card-custom mb-4 none" id="koperasi">
						<div class="card-header">
							<h6 class="mb-0">Data Koperasi</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="name_koperasi" class="col-form-label col-5 col-md-4">Nama Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="name_koperasi"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="address_koperasi" class="col-form-label col-5 col-md-4">Alamat Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="address_koperasi"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="type_koperasi_id" class="col-form-label col-5 col-md-4">Jenis Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="type_koperasi_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="date_establishment_koperasi" class="col-form-label col-5 col-md-4">Tanggal Pendirian Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="date_establishment_koperasi"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="registrasion_number_koperasi" class="col-form-label col-5 col-md-4">Nomor Induk Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="registrasion_number_koperasi"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="position_koperasi_id" class="col-form-label col-5 col-md-4">Jabatan di Koperasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="position_koperasi_id"></div>
			                </div>
		                </div>
		            </div>
					<div class="card card-custom">
						<div class="card-header">
							<h6 class="mb-0">Monitoring</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="m1" class="col-form-label col-5 col-md-4">Permasalahan yang dihadapi dalam pengembangan usaha</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="m1"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="m2_id" class="col-form-label col-5 col-md-4">Kebutuhan Diklat</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="m2_id"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="m3" class="col-form-label col-5 col-md-4">Rekomendasi</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="m3"></div>
			                </div>
			            </div>
			        </div>
				</form>
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
	<div class="modal" id="modal-photo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-transparent border-0 d-block text-center">
				<img src="{{asset('assets/images/user.png')}}" class="rounded-circle mb-3 profile_photo" width="400" data-dismiss="modal">
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script>const id = {{$id}}</script>
	<script src="{{asset('api/view-peserta.js')}}"></script>
@endsection