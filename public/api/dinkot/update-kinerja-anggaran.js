$.ajax({
    url: `${api_url}budged_performance/${user}/get`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
    	let value = result.data
        // console.log(value)

    	value.budged_realization1 != null && value.budged_realization1 != '0' ? realisasi_anggaran_tahap1 = value.budged_realization1 : realisasi_anggaran_tahap1 = ''
    	value.budged_realization2 != null && value.budged_realization2 != '0' ? realisasi_anggaran_tahap2 = value.budged_realization2 : realisasi_anggaran_tahap2 = ''
    	
    	if (value.document_budged_realization1 != `${root}storage/0`) {
	        $('#file1').parents('.file-group1').hide()
	        addStagingFile(value.document_budged_realization1.substr(58), 'pdf', 'file1')
    	}
    	if (value.document_budged_realization2 != `${root}storage/0`) {
	        $('#file2').parents('.file-group2').hide()
	        addStagingFile(value.document_budged_realization2.substr(58), 'pdf', 'file2')
    	}

        $('#budged_realization1').val(convert(realisasi_anggaran_tahap1))
        $('#budged_realization2').val(convert(realisasi_anggaran_tahap2))

        $('#card').show()
        $('#loading').hide()
    }
})

$(document).on('keyup', '#budged_realization1', function() {
    let value = $(this).val()
    $(this).val(convert(value))
})
$(document).on('keyup', '#budged_realization2', function() {
    let value = $(this).val()
    $(this).val(convert(value))
})


$('form').submit(function(e) {
    $('.is-invalid').removeClass('is-invalid')
	e.preventDefault()
	addLoading()

	let fd = new FormData($('form')[0]);
	fd.append('budged_realization1', number($('#budged_realization1').val()))
	fd.append('budged_realization2', number($('#budged_realization2').val()))
	if (file1 != null) fd.append('document_budged_realization1', file1)
	if (file2 != null) fd.append('document_budged_realization2', file2)
    
    $.ajax({
	    url: `${api_url}budged_performance/update`,
	    type: 'POST',
        processData: false,
        contentType: false,
        data: fd,
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	// console.log(result)
	    	location.href = `${root}dinkot/kinerja-anggaran`
	    },
	    error: function(xhr) {
            removeLoading('Simpan')
            let err = xhr.responseJSON.errors
            // console.log(err)
	    }
	})
})