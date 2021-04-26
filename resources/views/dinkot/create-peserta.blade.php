@extends('layouts/app')

@section('title','Tambah Peserta')

@section('style')
<link rel="stylesheet" href="{{asset('assets/vendors/croppie/croppie.css')}}">
@endsection

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Tambah Peserta</h4>
		</div>
		<div class="none" id="card">
			<div class="row">
				<div class="col-lg-4">
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Foto Peserta</h6>
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
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Data Peserta</h6>
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
			                    <label for="id_number" class="col-form-label col-md-4">Nomor KTP</label>
			                    <div class="col-md-8">
			                        <input type="tel" class="form-control" id="id_number" min="16" max="16">
			                        <div class="invalid-feedback" id="id_number-feedback"></div>
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
			                    <label for="province_id" class="col-form-label col-md-4">Provinsi</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="province_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="province_id-feedback"></div>
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
					<div class="card card-custom mb-4">
						<div class="card-header">
							<h6 class="mb-0">Data Koperasi atau UMKM Peserta</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="business_status_id" class="col-form-label col-md-4">Status Usaha</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="business_status_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="business_status_id-feedback"></div>
			                    </div>
			                </div>
			            </div>
			        </div>
					<div class="card card-custom mb-4 none" id="umkm">
						<div class="card-header">
							<h6 class="mb-0">Data UMKM</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="business_sector_id" class="col-form-label col-md-4">Sektor UMKM</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="business_sector_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="business_sector_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="name_umkm" class="col-form-label col-md-4">Nama UMKM</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="name_umkm">
			                        <div class="invalid-feedback" id="name_umkm-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="address_umkm" class="col-form-label col-md-4">Alamat UMKM</label>
			                    <div class="col-md-8">
			                        <textarea class="form-control form-control-sm" id="address_umkm" rows="3"></textarea>
			                        <div class="invalid-feedback" id="address_umkm-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="date_establishment_umkm" class="col-form-label col-md-4">Tanggal UMKM Didirikan</label>
			                    <div class="col-md-8">
			                        <input type="date" class="form-control" id="date_establishment_umkm">
			                        <div class="invalid-feedback" id="date_establishment_umkm-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="no_iumk" class="col-form-label col-md-4">Nomor IUMK</label>
			                    <div class="col-md-8">
			                        <input type="tel" class="form-control" id="no_iumk">
			                        <div class="invalid-feedback" id="no_iumk-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="position_umkm_id" class="col-form-label col-md-4">Posisi UMKM</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="position_umkm_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="position_umkm_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="business_turnover" class="col-form-label col-md-4">Omset Usaha per Bulan</label>
			                    <div class="col-md-8">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">Rp</div>
										</div>
				                        <input type="tel" class="form-control" id="business_turnover">
				                        <div class="invalid-feedback" id="business_turnover-feedback"></div>
									</div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="number_employees" class="col-form-label col-md-4">Jumlah Tenaga Kerja UMKM</label>
			                    <div class="col-md-8">
			                        <input type="tel" class="form-control" id="number_employees">
			                        <div class="invalid-feedback" id="number_employees-feedback"></div>
			                    </div>
			                </div>
		                </div>
		            </div>
					<div class="card card-custom mb-4 none" id="koperasi">
						<div class="card-header">
							<h6 class="mb-0">Data Koperasi</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="name_koperasi" class="col-form-label col-md-4">Nama Koperasi</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="name_koperasi">
			                        <div class="invalid-feedback" id="name_koperasi-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="address_koperasi" class="col-form-label col-md-4">Alamat Koperasi</label>
			                    <div class="col-md-8">
			                        <textarea class="form-control form-control-sm" id="address_koperasi" rows="3"></textarea>
			                        <div class="invalid-feedback" id="address_koperasi-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="type_koperasi_id" class="col-form-label col-md-4">Jenis Koperasi</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="type_koperasi_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="type_koperasi_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="date_establishment_koperasi" class="col-form-label col-md-4">Tanggal Koperasi Didirikan</label>
			                    <div class="col-md-8">
			                        <input type="date" class="form-control" id="date_establishment_koperasi">
			                        <div class="invalid-feedback" id="date_establishment_koperasi-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="registrasion_number_koperasi" class="col-form-label col-md-4">Nomor Induk Koperasi</label>
			                    <div class="col-md-8">
			                        <input class="form-control" id="registrasion_number_koperasi">
			                        <div class="invalid-feedback" id="registrasion_number_koperasi-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="position_koperasi_id" class="col-form-label col-md-4">Posisi Koperasi</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="position_koperasi_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="position_koperasi_id-feedback"></div>
			                    </div>
			                </div>
		                </div>
		            </div>
					<div class="card card-custom">
						<div class="card-header">
							<h6 class="mb-0">Monitoring</h6>
						</div>
			            <div class="card-body">
			                <div class="form-group row">
			                    <label for="m1" class="col-form-label col-md-4">Permasalahan yang dihadapi dalam pengembangan usaha</label>
			                    <div class="col-md-8">
			                        <textarea class="form-control form-control-sm" id="m1" rows="3"></textarea>
			                        <div class="invalid-feedback" id="m1-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="m2_id" class="col-form-label col-md-4">Kebutuhan Diklat</label>
			                    <div class="col-md-8">
			                    	<select class="custom-select" id="m2_id" role="button">
			                    		<option disabled selected>Pilih</option>
			                    	</select>
			                        <div class="invalid-feedback" id="m2_id-feedback"></div>
			                    </div>
			                </div>
			                <div class="form-group row">
			                    <label for="m3" class="col-form-label col-md-4">Rekomendasi</label>
			                    <div class="col-md-8">
			                        <textarea class="form-control form-control-sm" id="m3" rows="3"></textarea>
			                        <div class="invalid-feedback" id="m3-feedback"></div>
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
	<script>const id = {{$id}}</script>
    <script src="{{asset('assets/vendors/croppie/croppie.js')}}"></script>
	<script src="{{asset('assets/js/photo.js')}}"></script>
	<script src="{{asset('api/dinkot/create-peserta.js')}}"></script>
@endsection