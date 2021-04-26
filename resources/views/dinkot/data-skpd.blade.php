@extends('layouts/app')

@section('title','Data SKPD')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Data SKPD</h4>
			<a href="{{url('dinkot/data-skpd/update')}}" class="btn btn-sm btn-outline-primary mb-1 none" id="add">Tambah Data SKPD</a>
			<a href="{{url('dinkot/data-skpd/update')}}" class="btn btn-sm btn-outline-primary mb-1 none" id="edit">Edit Data SKPD</a>
		</div>
		<div class="card card-custom none" id="card">
			<div class="card-body">
                <div class="row">
                    <label class="col-form-label col-5">Provinsi</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="province"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">Kab/Kota</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="districts_city"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">Nama Kepala Dinas</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="name_dinas"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">NIP Kepala Dinas</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="nip_dinas"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">Telp/HP Kepala Dinas</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="phone_number_dinas"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">Nama Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="name_responsible_person"></div>
                </div>
                <div class="row">
                    <label class="col-form-label col-5">Telp/HP Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</label>
                    <div class="col-form-label col text-center">:</div>
                    <div class="col-form-label col-6" id="phone_number_responsible_person"></div>
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
	<script src="{{asset('api/dinkot/data-skpd.js')}}"></script>
@endsection