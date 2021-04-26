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
							<h5 class="name">Dwi Mei Yani</h5>
							<div class="text-secondary id_number">3213304205770005</div>
						</div>
					</div>
				</div>
				<form class="col-lg-8">
					<div class="card card-custom">
						<div class="card-header">
							<h6 class="mb-0">Data Pendamping</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="name" class="col-form-label col-md-4">Nama Lengkap</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="name">
			                        <div class="invalid-feedback" id="name-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="no_ktp" class="col-form-label col-md-4">Nomor KTP</label>
			                    <div class="col-md-8">
			                        <input type="tel" class="form-control" id="no_ktp" min="16" max="16">
			                        <div class="invalid-feedback" id="no_ktp-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="status" class="col-form-label col-md-4">Status</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="status" role="button">
			                    		<option disabled selected>Pilih</option>
			                    		<option value="lajang">Lajang</option>
			                    		<option value="menikah">Menikah</option>
			                    	</select>
			                        <div class="invalid-feedback" id="status-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="gender" class="col-form-label col-md-4">Jenis Kelamin</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="gender" role="button">
			                    		<option disabled selected>Pilih</option>
			                    		<option value="laki-laki">Laki-Laki</option>
			                    		<option value="perempuan">Perempuan</option>
			                    	</select>
			                        <div class="invalid-feedback" id="gender-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="place_birth" class="col-form-label col-md-4">Tempat Lahir</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="place_birth">
			                        <div class="invalid-feedback" id="place_birth-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="date_birth" class="col-form-label col-md-4">Tanggal Lahir</label>
			                    <div class="col-md-8">
			                        <input type="date" class="form-control" id="date_birth">
			                        <div class="invalid-feedback" id="date_birth-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="religion_id" class="col-form-label col-md-4">Agama</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="religion_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="religion_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="education_id" class="col-form-label col-md-4">Pendidikan Terakhir</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="education_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="education_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="home_address" class="col-form-label col-md-4">Alamat Rumah</label>
			                    <div class="col-md-8">
			                        <textarea class="form-control form-control-sm" id="home_address" rows="3"></textarea>
			                        <div class="invalid-feedback" id="home_address-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="districts_city_id" class="col-form-label col-md-4">Kab/Kota</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="districts_city_id" role="button" disabled>
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="districts_city_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="phone_number" class="col-form-label col-md-4">Telp/HP</label>
			                    <div class="col-md-8">
			                        <input type="tel" class="form-control" id="phone_number" min="10" max="20">
			                        <div class="invalid-feedback" id="phone_number-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="email" class="col-form-label col-md-4">Email</label>
			                    <div class="col-md-8">
			                        <input type="email" class="form-control" id="email">
			                        <div class="invalid-feedback" id="email-feedback"></div>
			                    </div>
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
	<script src="{{asset('api/view-pendamping.js')}}"></script>
@endsection