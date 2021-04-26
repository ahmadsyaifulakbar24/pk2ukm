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


// $.ajax({
//     url: `${api_url}param/religion`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#religion_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/education`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#education_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/province`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.province}</option>`
//             $('#province_id').append(append)
//         })
//     }
// })

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

// $.ajax({
//     url: `${api_url}param/business_status`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#business_status_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/type_koperasi`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#type_koperasi_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/position_koperasi`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#position_koperasi_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/business_sector`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#business_sector_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/position_umkm`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#position_umkm_id').append(append)
//         })
//     }
// })

// $.ajax({
//     url: `${api_url}param/training_needs`,
//     type: 'GET',
//     beforeSend: function(xhr) {
//         xhr.setRequestHeader("Authorization", "Bearer " + token)
//     },
//     success: function(result) {
//         // console.log(result)
//         $.each(result.data, function(index, value) {
//             append = `<option value="${value.id}">${value.param}</option>`
//             $('#m2_id').append(append)
//         })
//     }
// })

// $(document).ajaxStop(function() {
    $('#card').show()
    $('#loading').hide()
// })

// $('#province_id').change(function() {
// 	get_districs_city($(this).val())
// })

// $('#business_status_id').change(function() {
// 	if ($(this).val() == 14) {
// 		$('#umkm').show()
// 		$('#koperasi').hide()
// 	}
// 	else if ($(this).val() == 15) {
// 		$('#umkm').hide()
// 		$('#koperasi').show()
// 	}
// 	else {
// 		$('#umkm').hide()
// 		$('#koperasi').hide()
// 	}
// })

// $(document).on('keyup', '#business_turnover', function() {
//     let value = $(this).val()
//     $(this).val(convert(value))
// })

// $('form').submit(function(e) {
//     $('#profile_photo-feedback').addClass('hide')
//     $('.is-invalid').removeClass('is-invalid')
// 	e.preventDefault()
// 	addLoading()
// 	console.clear()

// 	let formData = new FormData($('form')[0]);
// 	formData.append('name', $('#name').val())
// 	formData.append('id_number', $('#id_number').val())
// 	formData.append('gender', $('#gender').val())
// 	formData.append('place_birth', $('#place_birth').val())
// 	formData.append('date_birth', $('#date_birth').val())
// 	formData.append('religion_id', $('#religion_id').val())
// 	formData.append('education_id', $('#education_id').val())
// 	formData.append('province_id', $('#province_id').val())
// 	formData.append('districts_city_id', $('#districts_city_id').val())
// 	formData.append('phone_number', $('#phone_number').val())
// 	formData.append('email', $('#email').val())
// 	formData.append('business_status_id', $('#business_status_id').val())
// 	if ($('#business_status_id').val() == 14) {
// 		formData.append('business_sector_id', $('#business_sector_id').val())
// 		formData.append('name_umkm', $('#name_umkm').val())
// 		formData.append('address_umkm', $('#address_umkm').val())
// 		formData.append('date_establishment_umkm', $('#date_establishment_umkm').val())
// 		formData.append('no_iumk', $('#no_iumk').val())
// 		formData.append('position_umkm_id', $('#position_umkm_id').val())
// 		formData.append('business_turnover', number($('#business_turnover').val()))
// 		formData.append('number_employees', $('#number_employees').val())
// 	}
// 	else if ($('#business_status_id').val() == 15) {
// 		formData.append('name_koperasi', $('#name_koperasi').val())
// 		formData.append('address_koperasi', $('#address_koperasi').val())
// 		formData.append('type_koperasi_id', $('#type_koperasi_id').val())
// 		formData.append('date_establishment_koperasi', $('#date_establishment_koperasi').val())
// 		formData.append('registrasion_number_koperasi', $('#registrasion_number_koperasi').val())
// 		formData.append('position_koperasi_id', $('#position_koperasi_id').val())
//     }
// 	formData.append('m1', $('#m1').val())
// 	formData.append('m2_id', $('#m2_id').val())
// 	formData.append('m3', $('#m3').val())
// 	formData.append('profile_photo', profile_photo)

//     $.ajax({
// 	    url: `${api_url}participant/${id}/create`,
// 	    type: 'POST',
//         processData: false,
//         contentType: false,
//         data: formData,
// 	    beforeSend: function(xhr) {
// 	        xhr.setRequestHeader("Authorization", "Bearer " + token)
// 	    },
// 	    success: function(result) {
// 	    	// console.log(result)
// 	    	location.href = `${root}kegitan/${id}`
// 	    },
// 	    error: function(xhr) {
//             removeLoading('Simpan')
//             let err = xhr.responseJSON.errors
//             console.log(err)
//             if (err.profile_photo) {
//                 $('#profile_photo-feedback').removeClass('hide')
//                 $('#profile_photo-feedback').html('Masukkan Foto')
//             }
//             if (err.name) {
//                 $('#name').addClass('is-invalid')
//                 $('#name-feedback').html('Masukkan nama lengkap')
//             }
//             if (err.id_number) {
//                 $('#id_number').addClass('is-invalid')
//                 $('#id_number-feedback').html('Masukkan nomor ktp')
//             }
//             if (err.gender) {
//                 $('#gender').addClass('is-invalid')
//                 $('#gender-feedback').html('Pilih jenis kelamin')
//             }
//             if (err.place_birth) {
//                 $('#place_birth').addClass('is-invalid')
//                 $('#place_birth-feedback').html('Masukkan tempat lahir')
//             }
//             if (err.date_birth) {
//                 $('#date_birth').addClass('is-invalid')
//                 $('#date_birth-feedback').html('Masukkan tanggal lahir')
//             }
//             if (err.religion_id) {
//                 $('#religion_id').addClass('is-invalid')
//                 $('#religion_id-feedback').html('Pilih agama')
//             }
//             if (err.education_id) {
//                 $('#education_id').addClass('is-invalid')
//                 $('#education_id-feedback').html('Pilih pendidikan terakhir')
//             }
//             if (err.province_id) {
//                 $('#province_id').addClass('is-invalid')
//                 $('#province_id-feedback').html('Pilih provinsi')
//             }
//             if (err.districts_city_id) {
//                 $('#districts_city_id').addClass('is-invalid')
//                 $('#districts_city_id-feedback').html('Pilih kab/kota')
//             }
//             if (err.phone_number) {
//                 $('#phone_number').addClass('is-invalid')
//                 $('#phone_number-feedback').html('Masukkan telp/hp')
//             }
//             if (err.email) {
//                 $('#email').addClass('is-invalid')
//                 $('#email-feedback').html('Masukkan email')
//             }
//             if (err.business_status_id) {
//                 $('#business_status_id').addClass('is-invalid')
//                 $('#business_status_id-feedback').html('Pilih status usaha')
//             }

//             if (err.business_sector_id) {
//                 $('#business_sector_id').addClass('is-invalid')
//                 $('#business_sector_id-feedback').html('Pilih sektor umkm')
//             }
//             if (err.name_umkm) {
//                 $('#name_umkm').addClass('is-invalid')
//                 $('#name_umkm-feedback').html('Masukkan nama umkm')
//             }
//             if (err.address_umkm) {
//                 $('#address_umkm').addClass('is-invalid')
//                 $('#address_umkm-feedback').html('Masukkan alamat umkm')
//             }
//             if (err.date_establishment_umkm) {
//                 $('#date_establishment_umkm').addClass('is-invalid')
//                 $('#date_establishment_umkm-feedback').html('Masukkan tanggal umkm didirikan')
//             }
//             if (err.no_iumk) {
//                 $('#no_iumk').addClass('is-invalid')
//                 $('#no_iumk-feedback').html('Masukkan nomor iumk')
//             }
//             if (err.position_umkm_id) {
//                 $('#position_umkm_id').addClass('is-invalid')
//                 $('#position_umkm_id-feedback').html('Pilih posisi umkm')
//             }
//             if (err.business_turnover) {
//                 $('#business_turnover').addClass('is-invalid')
//                 $('#business_turnover-feedback').html('Masukkan omset umkm per bulan')
//             }
//             if (err.number_employees) {
//                 $('#number_employees').addClass('is-invalid')
//                 $('#number_employees-feedback').html('Masukkan jumlah tenaga kerja umkm')
//             }

//             if (err.name_koperasi) {
//                 $('#name_koperasi').addClass('is-invalid')
//                 $('#name_koperasi-feedback').html('Masukkan nama koperasi')
//             }
//             if (err.address_koperasi) {
//                 $('#address_koperasi').addClass('is-invalid')
//                 $('#address_koperasi-feedback').html('Masukkan alamat koperasi')
//             }
//             if (err.type_koperasi_id) {
//                 $('#type_koperasi_id').addClass('is-invalid')
//                 $('#type_koperasi_id-feedback').html('Pilih jenis koperasi')
//             }
//             if (err.date_establishment_koperasi) {
//                 $('#date_establishment_koperasi').addClass('is-invalid')
//                 $('#date_establishment_koperasi-feedback').html('Masukkan tanggal koperasi didirikan')
//             }
//             if (err.registrasion_number_koperasi) {
//                 $('#registrasion_number_koperasi').addClass('is-invalid')
//                 $('#registrasion_number_koperasi-feedback').html('Masukkan nomor induk koperasi')
//             }
//             if (err.position_koperasi_id) {
//                 $('#position_koperasi_id').addClass('is-invalid')
//                 $('#position_koperasi_id-feedback').html('Pilih posisi koperasi')
//             }

//             if (err.m1) {
//                 $('#m1').addClass('is-invalid')
//                 $('#m1-feedback').html('Masukkan permasalahan yang dihadapi dalam pengembangan usaha')
//             }
//             if (err.m2_id) {
//                 $('#m2_id').addClass('is-invalid')
//                 $('#m2_id-feedback').html('Pilih kebutuhan diklat')
//             }
//             if (err.m3) {
//                 $('#m3').addClass('is-invalid')
//                 $('#m3-feedback').html('Masukkan rekomendasi')
//             }
// 	    }
// 	})
// })
