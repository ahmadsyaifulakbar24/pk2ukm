@extends('layouts/app')

@section('title','Data Pendamping')

@section('style')
<link rel="stylesheet" href="{{asset('assets/vendors/croppie/croppie.css')}}">
@endsection

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Data Pendamping</h4>
		</div>
		<div class="none" id="card">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Foto Pendamping</h6>
						</div>
						<div class="card-body text-center">
							<img src="{{asset('assets/images/user.png')}}" class="mx-auto rounded-circle mb-3 profile_photo" width="150" data-toggle="modal" data-target="#modal-photo" role="button">
							<h5 class="nama"></h5>
							<div class="text-secondary no_ktp"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card card-custom">
						<div class="card-header">
							<h6 class="mb-0">Data Pendamping</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row align-items-center">
			                    <label for="name" class="col-form-label col-5 col-md-4">Nama Lengkap</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 nama"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="no_ktp" class="col-form-label col-5 col-md-4">Nomor KTP</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 no_ktp"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="status" class="col-form-label col-5 col-md-4">Status</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 text-capitalize" id="status"></div>
			                </div>
			                <div class="form-group row align-items-center">
			                    <label for="gender" class="col-form-label col-5 col-md-4">Jenis Kelamin</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7 text-capitalize" id="gender"></div>
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
			                    <label for="home_address" class="col-form-label col-5 col-md-4">Alamat Rumah</label>
			                    <div class="col">:</div>
			                    <div class="col-6 col-md-7" id="home_address"></div>
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
	<script src="{{asset('api/view-pendamping.js')}}"></script>
@endsection