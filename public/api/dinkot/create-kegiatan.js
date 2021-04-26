let province_id

$.ajax({
    url: `${api_url}user`,
    type: 'GET',
    data: {
        user_id: user
    },
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
        // console.log(result)
        province_id = result.data.province.id
        get_districts_city()
    }
})

$.ajax({
    url: `${api_url}param/training_type`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
        // console.log(result)
        $.each(result.data, function(index, value) {
            append = `<option value="${value.id}">${value.param}</option>`
            $('#training_type_id').append(append)
        })
    }
})

function get_districts_city() {
    $.ajax({
        url: `${api_url}param/districts_city/${province_id}`,
        type: 'GET',
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            // console.log(result)
            $.each(result.data, function(index, value) {
                append = `<option value="${value.id}">${value.districts_city}</option>`
                $('#districts_city_id').append(append)
            })
        }
    })
}

$(document).ajaxStop(function() {
    $('#card').show()
    $('#loading').hide()
})

$('form').submit(function(e) {
    $('.is-invalid').removeClass('is-invalid')
	e.preventDefault()
	addLoading()
	
	let fd = new FormData($('form')[0]);
	fd.append('training_type_id', $('#training_type_id').val())
	fd.append('training_title', $('#training_title').val())
	fd.append('start_date', $('#start_date').val())
	fd.append('finish_date', $('#finish_date').val())
	fd.append('place', $('#place').val())
	fd.append('districts_city_id', $('#districts_city_id').val())

    $.ajax({
	    url: `${api_url}training/create`,
	    type: 'POST',
        processData: false,
        contentType: false,
	    data: fd,
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	location.href = `${root}dinkot/data-pelatihan`
	    },
	    error: function(xhr) {
            removeLoading('Simpan')
            let err = xhr.responseJSON.errors
            // console.log(err)
            if (err.training_type_id) {
                $('#training_type_id').addClass('is-invalid')
                $('#training_type_id-feedback').html('Pilih jenis pelatihan')
            }
            if (err.training_title) {
                $('#training_title').addClass('is-invalid')
                $('#training_title-feedback').html('Masukkan judul pelatihan')
            }
            if (err.start_date) {
                $('#start_date').addClass('is-invalid')
                $('#start_date-feedback').html('Masukkan tanggal')
            }
            if (err.finish_date) {
                $('#finish_date').addClass('is-invalid')
                $('#finish_date-feedback').html('Masukkan tanggal')
            }
            if (err.place) {
                $('#place').addClass('is-invalid')
                $('#place-feedback').html('Masukkan tempat pelaksanaan')
            }
            if (err.districts_city_id) {
                $('#districts_city_id').addClass('is-invalid')
                $('#districts_city_id-feedback').html('Masukkan kab/kota kegiatan')
            }
	    }
	})
})
