$.ajax({
    url: `${api_url}budged_performance/${id}/by_province`,
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function (result) {
        $.each(result.data, function(index, value) {
        	// console.log(value)
        	value.budged_performance.budged != null ? pagu_anggaran = value.budged_performance.budged : pagu_anggaran = 0
        	value.budged_performance.budged_realization1 != null ? realisasi_anggaran_tahap1 = value.budged_performance.budged_realization1 : realisasi_anggaran_tahap1 = 0
        	value.budged_performance.budged_realization2 != null ? realisasi_anggaran_tahap2 = value.budged_performance.budged_realization2 : realisasi_anggaran_tahap2 = 0

        	value.budged_performance.target_participant != null ? target_peserta = value.budged_performance.target_participant : target_peserta = 0
        	value.budged_performance.realization_participant1 != null ? realisasi_peserta_tahap1 = value.budged_performance.realization_participant1 : realisasi_peserta_tahap1 = 0
        	value.budged_performance.realization_participant2 != null ? realisasi_peserta_tahap2 = value.budged_performance.realization_participant2 : realisasi_peserta_tahap2 = 0

        	value.budged_performance.target_companion != null ? target_pendamping = value.budged_performance.target_companion : target_pendamping = 0
        	value.budged_performance.realization_companion != null ? realisasi_pendamping = value.budged_performance.realization_companion : realisasi_pendamping = 0

        	if (value.budged_performance.document_budged_realization1 != `${root}storage/0`) {
        		file_tahap_1 = `<a href="${value.budged_performance.document_budged_realization1}" target="_blank" class="btn btn-sm btn-outline-primary">Download file</a>`
        	} else {
	        	file_tahap_1 = `Belum upload file`
        	}
        	if (value.budged_performance.document_budged_realization2 != `${root}storage/0`) {
        		file_tahap_2 = `<a href="${value.budged_performance.document_budged_realization2}" target="_blank" class="btn btn-sm btn-outline-primary">Download file</a>`
        	} else {
	        	file_tahap_2 = `Belum upload file`
        	}
        	
            append = `<div class="col-xl-6 mb-4">
				<div class="card card-custom card-height">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h6 class="mb-0 pr-2">${value.name}</h6>
					</div>
					<div class="card-body">
						<h6>Anggaran DAK Non Fisik PK2UMKM</h6>
		                <div class="row">
		                    <label class="col-form-label col-6">Pagu Anggaran</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${rupiah(pagu_anggaran)}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Realisasi Anggaran Tahap 1</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${rupiah(realisasi_anggaran_tahap1)}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Realisasi Anggaran Tahap 2</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${rupiah(realisasi_anggaran_tahap2)}</div>
		                </div>
		                <hr>
						<h6>Pelatihan</h6>
		                <div class="row">
		                    <label class="col-form-label col-6">Target Peserta</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${convert(target_peserta)}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Realisasi Peserta Tahap 1</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${convert(realisasi_peserta_tahap1)}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Realisasi Peserta Tahap 2</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${convert(realisasi_peserta_tahap2)}</div>
		                </div>
		                <hr>
						<h6>Pendamping</h6>
		                <div class="row">
		                    <label class="col-form-label col-6">Target Pendamping</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${convert(target_pendamping)}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Realisasi Pendamping</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${convert(realisasi_pendamping)}</div>
		                </div>
		                <hr>
						<h6>File Realisasi Anggaran</h6>
		                <div class="row">
		                    <label class="col-form-label col-6">Tahap 1</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${file_tahap_1}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Tahap 2</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${file_tahap_2}</div>
		                </div>
	                </div>
				</div>
			</div>`
	        $('#data').append(append)
        })
        $('#card').show()
        $('#loading').hide()
    }
})