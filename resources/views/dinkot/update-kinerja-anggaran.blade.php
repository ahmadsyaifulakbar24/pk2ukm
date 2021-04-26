@extends('layouts/app')

@section('title','Form Kinerja Anggaran')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-2">
			<h4>Form Kinerja Anggaran</h4>
		</div>
        <form class="card card-custom none" id="card">
			<div class="card-header">
				<h6 class="mb-0">Anggaran DAK Non Fisik PK2UMKM</h6>
			</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="budged_realization1" class="col-form-label col-md-4">Realisasi Anggaran Tahap 1</label>
                    <div class="col-md-8">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">Rp</div>
							</div>
	                        <input class="form-control" id="budged_realization1">
						</div>
                        <div class="invalid-feedback" id="budged_realization1-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="budged_realization2" class="col-form-label col-md-4">Realisasi Anggaran Tahap 2</label>
                    <div class="col-md-8">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">Rp</div>
							</div>
	                        <input class="form-control" id="budged_realization2">
	                        <div class="invalid-feedback" id="budged_realization2-feedback"></div>
						</div>
                    </div>
                </div>
				<div class="form-group form-file row">
					<label for="file" class="col-md-4 col-form-label">File Kinerja Anggaran</label>
					<div id="form-file1" class="col-md-8 pb-3">
						<div class="file-group1">
							<div class="custom-file">
								<input type="file" class="custom-file-input" accept="application/pdf" id="file1" role="button">
								<label class="custom-file-label">Pilih File</label>
								<div id="file-feedback" class="invalid-feedback"></div>
							</div>
						</div>
					</div>
					<div id="form-file2" class="offset-md-4 col-md-8">
						<div class="file-group2">
							<div class="custom-file">
								<input type="file" class="custom-file-input" accept="application/pdf" id="file2" role="button">
								<label class="custom-file-label">Pilih File</label>
								<div id="file-feedback" class="invalid-feedback"></div>
							</div>
						</div>
					</div>
					<div class="invalid-feedback" id="file-feedback"></div>
				</div>
	            <div class="form-group row pt-3">
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
	<script src="{{asset('assets/js/file.js')}}"></script>
	<script src="{{asset('api/dinkot/update-kinerja-anggaran.js')}}"></script>
@endsection