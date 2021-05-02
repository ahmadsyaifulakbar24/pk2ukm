$.ajax({
    url: `${api_url}budged_performance/${user}/get`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
    	let value = result.data
        // console.log(value)

    	value.budged != null ? pagu_anggaran = value.budged : pagu_anggaran = 0
    	value.budged_realization1 != null ? realisasi_anggaran_tahap1 = value.budged_realization1 : realisasi_anggaran_tahap1 = 0
    	value.budged_realization2 != null ? realisasi_anggaran_tahap2 = value.budged_realization2 : realisasi_anggaran_tahap2 = 0

    	value.target_participant != null ? target_peserta = value.target_participant : target_peserta = 0
    	value.realization_participant1 != null ? realisasi_peserta_tahap1 = value.realization_participant1 : realisasi_peserta_tahap1 = 0
    	value.realization_participant2 != null ? realisasi_peserta_tahap2 = value.realization_participant2 : realisasi_peserta_tahap2 = 0

    	value.document_budged_realization1 != null ? target_pendamping = value.target_companion : target_pendamping = 0
    	value.realization_companion1 != null ? realisasi_pendamping_tahap1 = value.realization_companion1 : realisasi_pendamping_tahap1 = 0
    	value.realization_companion2 != null ? realisasi_pendamping_tahap2 = value.realization_companion2 : realisasi_pendamping_tahap2 = 0

    	if (value.document_budged_realization1 != `${root}storage/0`) {
    		file_tahap_1 = `<a href="${value.document_budged_realization1}" target="_blank" class="btn btn-sm btn-outline-primary">Download file</a>`
    	} else {
        	file_tahap_1 = `Belum upload file`
    	}
    	if (value.document_budged_realization2 != `${root}storage/0`) {
    		file_tahap_2 = `<a href="${value.document_budged_realization2}" target="_blank" class="btn btn-sm btn-outline-primary">Download file</a>`
    	} else {
        	file_tahap_2 = `Belum upload file`
    	}

        $('#budged').html(rupiah(pagu_anggaran))
        $('#budged_realization1').html(rupiah(realisasi_anggaran_tahap1))
        $('#budged_realization2').html(rupiah(realisasi_anggaran_tahap2))

        $('#target_participant').html(convert(target_peserta))
        $('#realization_participant1').html(convert(realisasi_peserta_tahap1))
        $('#realization_participant2').html(convert(realisasi_peserta_tahap2))
        
        $('#target_companion').html(convert(target_pendamping))
        $('#realization_companion').html(convert(realisasi_pendamping_tahap1 + realisasi_pendamping_tahap2))
        
        $('#document_budged_realization1').html(file_tahap_1)
        $('#document_budged_realization2').html(file_tahap_2)
        
        $('#card').show()
        $('#loading').hide()
    	$('#edit').show()
    }
})
