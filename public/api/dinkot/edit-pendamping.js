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
        get_districts_city(province_id)
    }
})

$.ajax({
    url: `${api_url}param/religion`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
        // console.log(result)
        $.each(result.data, function(index, value) {
            append = `<option value="${value.id}">${value.param}</option>`
            $('#religion_id').append(append)
        })
    }
})

$.ajax({
    url: `${api_url}param/education`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
        // console.log(result)
        $.each(result.data, function(index, value) {
            append = `<option value="${value.id}">${value.param}</option>`
            $('#education_id').append(append)
        })
    }
})

function get_districts_city(province) {
    $.ajax({
        url: `${api_url}param/districts_city/${province}`,
        type: 'GET',
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            // console.log(result)
            $('#districts_city_id').empty()
            $('#districts_city_id').attr('disabled', false)
            $('#districts_city_id').html('<option disabled selected>Pilih</option>')
            $.each(result.data, function(index, value) {
                append = `<option value="${value.id}">${value.districts_city}</option>`
                $('#districts_city_id').append(append)
            })
        }
    })
}

function get_pendamping() {
	$.ajax({
	    url: `${api_url}companion`,
	    type: 'GET',
	    data: {
	    	user_id: id
	    },
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	let value = result.data
	        // console.log(value)
	        $('#name').val(value.name)
			$('#no_ktp').val(value.no_ktp)
			$('#status').val(value.status)
			$('#gender').val(value.gender)
			$('#place_birth').val(value.place_birth)
			$('#date_birth').val(value.date_birth)
			$('#religion_id').val(value.religion.id)
			$('#education_id').val(value.education.id)
			$('#home_address').val(value.home_address)
			$('#districts_city_id').val(value.districts_city.id)
			$('#phone_number').val(value.phone_number)
			$('#email').val(value.email)
			$('.profile_photo').attr('src', value.profile_photo_url)
	        stop = true
	    }
	})
}

$(document).ajaxStop(function() {
    $('#card').show()
    $('#loading').hide()
    if (stop == false) get_pendamping()
})

$('form').submit(function(e) {
    $('#profile_photo-feedback').addClass('hide')
    $('.is-invalid').removeClass('is-invalid')
	e.preventDefault()
	addLoading()
	console.clear()

	let formData = new FormData($('form')[0]);
	formData.append('name', $('#name').val())
	profile_photo != null ? formData.append('profile_photo', profile_photo) : ''
	$('#no_ktp').val() != '' ? formData.append('no_ktp', $('#no_ktp').val()) : ''
	$('#status').val() != null ? formData.append('status', $('#status').val()) : ''
	$('#gender').val() != null ? formData.append('gender', $('#gender').val()) : ''
	$('#place_birth').val() != '' ? formData.append('place_birth', $('#place_birth').val()) : ''
	$('#date_birth').val() != '' ? formData.append('date_birth', $('#date_birth').val()) : ''
	$('#religion_id').val() != null ? formData.append('religion_id', $('#religion_id').val()) : ''
	$('#education_id').val() != null ? formData.append('education_id', $('#education_id').val()) : ''
	$('#home_address').val() != '' ? formData.append('home_address', $('#home_address').val()) : ''
	$('#districts_city_id').val() != null ? formData.append('districts_city_id', $('#districts_city_id').val()) : ''
	$('#phone_number').val() != '' ? formData.append('phone_number', $('#phone_number').val()) : ''
	$('#email').val() != '' ? formData.append('email', $('#email').val()) : ''

    $.ajax({
	    url: `${api_url}companion/${id}/update`,
	    type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	// console.log(result)
	    	location.href = `${root}dinkot/data-pendamping`
	    },
	    error: function(xhr) {
            removeLoading('Simpan')
            let err = xhr.responseJSON.errors
            console.log(err)
            if (err.name) {
                $('#name').addClass('is-invalid')
                $('#name-feedback').html('Masukkan nama lengkap')
            }
            if (err.username) {
	            if (err.username == "The username field is required.") {
	                $('#username').addClass('is-invalid')
	                $('#username-feedback').html('Masukkan username')
	            } else if (err.username == "The username has already been taken.") {
	                $('#username').addClass('is-invalid')
	                $('#username-feedback').html('Username telah digunakan')
	            }
            }
            if (err.password) {
                if (err.password == 'The password field is required.') {
                    $('#password').addClass('is-invalid')
                    $('#password-feedback').html('Masukkan password')
                } else if (err.password == 'The password must be at least 8 characters.') {
                    $('#npassword').addClass('is-invalid')
                    $('#npassword-feedback').html('Password minimal 8 karakter')
                } else if (err.password == 'The password confirmation does not match.') {
                    $('#cpassword').addClass('is-invalid')
                    $('#cpassword-feedback').html('Konfirmasi password dengan benar')
                }
            }
            if (err.password_confirmation) {
                if (err.password_confirmation == 'The password confirmation field is required.') {
                    $('#cpassword').addClass('is-invalid')
                    $('#cpassword-feedback').html('Masukkan konfirmasi password')
                }
            }
            // if (err.profile_photo) {
            //     $('#profile_photo-feedback').removeClass('hide')
            //     $('#profile_photo-feedback').html('Masukkan Foto')
            // }
            // if (err.id_number) {
            //     $('#id_number').addClass('is-invalid')
            //     $('#id_number-feedback').html('Masukkan nomor ktp')
            // }
            // if (err.status) {
            //     $('#status').addClass('is-invalid')
            //     $('#status-feedback').html('Pilih jenis kelamin')
            // }
            // if (err.gender) {
            //     $('#gender').addClass('is-invalid')
            //     $('#gender-feedback').html('Pilih jenis kelamin')
            // }
            // if (err.place_birth) {
            //     $('#place_birth').addClass('is-invalid')
            //     $('#place_birth-feedback').html('Masukkan tempat lahir')
            // }
            // if (err.date_birth) {
            //     $('#date_birth').addClass('is-invalid')
            //     $('#date_birth-feedback').html('Masukkan tanggal lahir')
            // }
            // if (err.religion_id) {
            //     $('#religion_id').addClass('is-invalid')
            //     $('#religion_id-feedback').html('Pilih agama')
            // }
            // if (err.education_id) {
            //     $('#education_id').addClass('is-invalid')
            //     $('#education_id-feedback').html('Pilih pendidikan terakhir')
            // }
            // if (err.home_address) {
            //     $('#home_address').addClass('is-invalid')
            //     $('#home_address-feedback').html('Masukkan alamat rumah')
            // }
            // if (err.districts_city_id) {
            //     $('#districts_city_id').addClass('is-invalid')
            //     $('#districts_city_id-feedback').html('Pilih kab/kota')
            // }
            // if (err.phone_number) {
            //     $('#phone_number').addClass('is-invalid')
            //     $('#phone_number-feedback').html('Masukkan telp/hp')
            // }
            // if (err.email) {
            //     $('#email').addClass('is-invalid')
            //     $('#email-feedback').html('Masukkan email')
            // }
	    }
	})
})
