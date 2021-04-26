$.ajax({
    url: `${api_url}skpd/${user}`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
    	let value = result.data
        // console.log(value)
        $('#name_dinas').val(value.name_dinas)
        $('#nip_dinas').val(value.nip_dinas)
        $('#phone_number_dinas').val(value.phone_number_dinas)
        $('#name_responsible_person').val(value.name_responsible_person)
        $('#phone_number_responsible_person').val(value.phone_number_responsible_person)
    },
    error: function(xhr) {
    	// console.log(xhr)
    	console.clear()
    },
    complete: function() {
        $('#card').show()
        $('#loading').hide()
    }
})

$('#form').submit(function(e) {
    $('.is-invalid').removeClass('is-invalid')
	e.preventDefault()
	addLoading()
    $.ajax({
	    url: `${api_url}skpd/create`,
	    type: 'POST',
	    data: {
	    	name_dinas: $('#name_dinas').val(),
	    	nip_dinas: $('#nip_dinas').val(),
	    	phone_number_dinas: $('#phone_number_dinas').val(),
	    	name_responsible_person: $('#name_responsible_person').val(),
	    	phone_number_responsible_person: $('#phone_number_responsible_person').val()
	    },
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	location.href = `${root}dinkot/data-skpd`
	    },
	    error: function(xhr) {
            removeLoading('Simpan')
            let err = xhr.responseJSON.errors
            // console.log(err)
            if (err.name_dinas) {
                $('#name_dinas').addClass('is-invalid')
                $('#name_dinas-feedback').html('Masukkan nama kepala dinas')
            }
            if (err.nip_dinas) {
                $('#nip_dinas').addClass('is-invalid')
                $('#nip_dinas-feedback').html('Masukkan nip kepala dinas')
            }
            if (err.phone_number_dinas) {
                $('#phone_number_dinas').addClass('is-invalid')
                $('#phone_number_dinas-feedback').html('Masukkan telp/hp kepala dinas')
            }
            if (err.name_responsible_person) {
                $('#name_responsible_person').addClass('is-invalid')
                $('#name_responsible_person-feedback').html('Masukkan nama penanggung jawab operasional harian dak non fisik pk2ukm')
            }
            if (err.phone_number_responsible_person) {
                $('#phone_number_responsible_person').addClass('is-invalid')
                $('#phone_number_responsible_person-feedback').html('Masukkan telp/hp penanggung jawab operasional harian dak non fisik pk2ukm')
            }
	    }
	})
})