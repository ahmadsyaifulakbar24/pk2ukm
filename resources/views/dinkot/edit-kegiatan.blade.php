@extends('layouts/app')

@section('title','Edit Kegiatan')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Edit Kegiatan</h4>
		</div>
		<form class="card card-custom mb-4 none" id="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="training_type_id" class="col-form-label col-md-4">Jenis Pelatihan</label>
                    <div class="col-md-8">
                    	<select id="training_type_id" class="custom-select" role="button">
                    		<option disabled selected>Pilih</option>
                    	</select>
                        <div class="invalid-feedback" id="training_type_id-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="training_title" class="col-form-label col-md-4">Judul Pelatihan</label>
                    <div class="col-md-8">
                        <input class="form-control" id="training_title">
                        <div class="invalid-feedback" id="training_title-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="start_date" class="col-form-label col-md-4">Tanggal Pelaksanaan</label>
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="start_date">
                        <div class="invalid-feedback" id="start_date-feedback"></div>
                    </div>
                    <div class="col text-center px-md-0 pt-md-2">Sampai dengan</div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="finish_date">
                        <div class="invalid-feedback" id="finish_date-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="place" class="col-form-label col-md-4">Tempat Pelaksanaan</label>
                    <div class="col-md-8">
                        <input class="form-control" id="place">
                        <div class="invalid-feedback" id="place-feedback"></div>
                    </div>
                </div>
                <div class="form-group row pb-3">
                    <label for="districts_city_id" class="col-form-label col-md-4">Kab/Kota Kegiatan</label>
                    <div class="col-md-8">
                    	<select id="districts_city_id" class="custom-select" role="button">
                    		<option disabled selected>Pilih</option>
                    	</select>
                        <div class="invalid-feedback" id="districts_city_id-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-md-4 col-md-8">
                        <button class="btn btn-block btn-primary" id="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
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
	<script src="{{asset('api/dinkot/edit-kegiatan.js')}}"></script>
@endsection