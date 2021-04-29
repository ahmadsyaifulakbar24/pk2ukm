@extends('layouts/app')

@section('title','Dashboard')

@section('style')
<link rel="stylesheet" href="{{asset('assets/vendors/croppie/croppie.css')}}">
@endsection

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Selamat datang, <span class="name"></span></h4>
		</div>
		<div id="card">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-custom card-height">
						<div class="card-header">
							<h6 class="mb-0">Foto Profile</h6>
						</div>
						<div class="card-body d-flex flex-column">
							<img src="{{asset('assets/images/user.png')}}" class="mx-auto rounded-circle mb-3 profile_photo" width="150" data-toggle="modal" data-target="#modal-photo" role="button">
							<form id="upload" class="text-center">
								<label class="btn btn-link btn-block" for="profile_photo">Upload Foto</label>
								<input type="file" class="none" id="profile_photo" accept="image/jpg">
								<small class="text-danger hide" id="profile_photo-feedback"></small>
								<input type="hidden" id="submit-upload">
							</form>
						</div>
					</div>
				</div>
				<form id="pass" class="col-lg-8">
					<div class="card card-custom mt-4 mt-lg-0">
						<div class="card-header">
							<h6 class="mb-0">Password</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="password" class="col-form-label col-md-4">Password Lama</label>
			                    <div class="col-md-8">
			                        <input type="password" class="form-control" id="password" minlength="8">
			                        <div class="invalid-feedback" id="password-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="npassword" class="col-form-label col-md-4">Password Baru</label>
			                    <div class="col-md-8">
			                        <input type="password" class="form-control" id="npassword" minlength="8">
			                        <div class="invalid-feedback" id="npassword-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="cpassword" class="col-form-label col-md-4">Konfirmasi Password</label>
			                    <div class="col-md-8">
			                        <input type="password" class="form-control" id="cpassword" minlength="8">
			                        <div class="invalid-feedback" id="cpassword-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row pt-4">
				                <div class="offset-md-4 col-md-8">
				                    <button class="btn btn-block btn-primary" id="submit">Simpan</button>
				                </div>
				            </div>
			            </div>
		            </div>
		        </form>
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
	<script src="{{asset('api/dinkot/dashboard.js')}}"></script>
@endsection