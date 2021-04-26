@extends('layouts/app')

@section('title','Edit Pendamping')

@section('style')
<link rel="stylesheet" href="{{asset('assets/vendors/croppie/croppie.css')}}">
@endsection

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Edit Pendamping</h4>
		</div>
		<div class="none" id="card">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Foto Pendamping</h6>
						</div>
						<div class="card-body d-flex flex-column">
							<img src="{{asset('assets/images/user.png')}}" class="mx-auto rounded-circle mb-3 profile_photo" width="150" data-toggle="modal" data-target="#modal-photo" role="button">
							<div class="text-center">
								<label class="btn btn-link btn-block" for="profile_photo">Upload Foto</label>
								<input type="file" class="none" id="profile_photo" accept="image/jpg">
								<small class="text-danger hide" id="profile_photo-feedback"></small>
							</div>
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
			                    <label for="username" class="col-form-label col-md-4">Username</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="username">
			                        <div class="invalid-feedback" id="username-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="password" class="col-form-label col-md-4">Password</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="password">
			                        <div class="invalid-feedback" id="password-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="cpassword" class="col-form-label col-md-4">Konfirmasi Password</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="cpassword">
			                        <div class="invalid-feedback" id="cpassword-feedback"></div>
			                    </div>
			                </div>
			                <hr>
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
	                 <div class="form-group row pt-4">
		                <div class="offset-md-4 col-md-8">
		                    <button class="btn btn-block btn-primary" id="submit">Simpan</button>
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
    <div class="modal fade" id="modal-avatar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center pb-0">
                    <div class="my-3" id="avatar-form">
                    	<input type="file" class="d-none" id="avatar" accept="image/jpg">
                    	<!-- <input type="file" class="d-none" id="avatar" accept="image/jpeg"> -->
                    	<label class="avatar-text" for="avatar" style="cursor:pointer;">
                    		<i class="mdi mdi-upload mdi-48px pr-0"></i>
                    		<p class="mb-0">Pilih file</p>
                    	</label>
                    </div>
                    <div id="avatar-preview" class="text-left" style="display:none;">
                    	<i class="mdi mdi-arrow-left mdi-24px text-left" style="cursor:pointer" id="back"></i>
                    </div>
                    <div class="container">
                    	<p class="text-danger none mb-0" id="feedback-file"></p>
                    </div>
                </div>
				<div class="modal-footer border-top-0">
					<div class="btn btn-sm btn-link" data-dismiss="modal">Batal</div>
					<button class="btn btn-sm btn-primary" id="upload" disabled>
	        			<i class="mdi mdi-loading mdi-1x mdi-spin pr-2 none" id="loadingAvatar"></i> Simpan
	        		</button>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{asset('assets/vendors/croppie/croppie.js')}}"></script>
	<script src="{{asset('assets/js/photo.js')}}"></script>
	<script src="{{asset('api/dinkot/create-pendamping.js')}}"></script>
@endsection