@extends('layouts/app')

@section('title','Form Data SKPD')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Form Data SKPD</h4>
		</div>
        <div class="card card-custom none" id="card">
            <div class="card-body">
                <form id="form">
                    <div class="form-group row">
                        <label for="name_dinas" class="col-form-label col-md-4">Nama Kepala Dinas</label>
                        <div class="col-md-8">
                            <input class="form-control" id="name_dinas" autofocus>
                            <div class="invalid-feedback" id="name_dinas-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip_dinas" class="col-form-label col-md-4">NIP Kepala Dinas</label>
                        <div class="col-md-8">
                            <input class="form-control" id="nip_dinas">
                            <div class="invalid-feedback" id="nip_dinas-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number_dinas" class="col-form-label col-md-4">Telp/HP Kepala Dinas</label>
                        <div class="col-md-8">
                            <input class="form-control" id="phone_number_dinas">
                            <div class="invalid-feedback" id="phone_number_dinas-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name_responsible_person" class="col-form-label col-md-4">Nama Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</label>
                        <div class="col-md-8">
                            <input class="form-control" id="name_responsible_person">
                            <div class="invalid-feedback" id="name_responsible_person-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number_responsible_person" class="col-form-label col-md-4">Telp/HP Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</label>
                        <div class="col-md-8">
                            <input class="form-control" id="phone_number_responsible_person">
                            <div class="invalid-feedback" id="phone_number_responsible_person-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row pt-3">
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
@endsection

@section('script')
	<script src="{{asset('api/dinkot/update-data-skpd.js')}}"></script>
@endsection