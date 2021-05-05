let province_id
let stop = false

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

function get_training_by_id() {
	$.ajax({
	    url: `${api_url}training/${id}/by_id`,
	    type: 'GET',
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	        let value = result.data
	        // console.log(value)
	        $('#training_type_id').val(value.training_type.id)
	        $('#training_title').val(value.training_title)
	        $('#start_date').val(value.start_date)
	        $('#finish_date').val(value.finish_date)
	        $('#place').val(value.place)
	        $('#districts_city_id').val(value.districts_city.id)
	        $('#status').val(value.status)
		    
		    $('#card').show()
		    $('#loading').hide()
		    stop = true
	    }
	})
}

$(document).ajaxStop(function() {
    stop == false ? get_training_by_id() : '' 
})

$(document).on('change', '#status', function() {
    let value = $(this).val()
    $('#submit').attr('disabled', true)
    $.ajax({
        url: `${api_url}training/${id}/update_status`,
        type: 'PATCH',
        data: {
        	status: value
        },
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            // console.log(result.data)
		    $('#submit').attr('disabled', false)
        }
    })
})

$('form').submit(function(e) {
    $('.is-invalid').removeClass('is-invalid')
	e.preventDefault()
	addLoading()

    $.ajax({
	    url: `${api_url}training/${id}/update`,
	    type: 'PATCH',
	    data: {
			training_type_id: $('#training_type_id').val(),
			training_title: $('#training_title').val(),
			start_date: $('#start_date').val(),
			finish_date: $('#finish_date').val(),
			place: $('#place').val(),
			districts_city_id: $('#districts_city_id').val()
		},
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
