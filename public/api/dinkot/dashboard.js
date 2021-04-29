$('.profile_photo').attr('src', photo)
let profile_photo = null

$(document).on('change', 'input[type="file"]', function(e) {
    let val = $(this).get(0).files[0]
    // let ext = val.name.split('.').pop()
    if (val.size <= 2000000) {
        profile_photo = val
        $('#upload').submit()
        $('#profile_photo-feedback').addClass('hide')
    } else {
        $('#profile_photo-feedback').removeClass('hide')
        $('#profile_photo-feedback').html('Ukuran foto maksimal 2MB')
    }
})

$('#upload').submit(function(e) {
    e.preventDefault()
    let formData = new FormData($('#upload')[0])
    formData.append('profile_photo', profile_photo)
	$.ajax({
        url: `${api_url}user/${user}/update_photo`,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            // console.log(result)
            let profile_photo = result.data.profile_photo_url
            localStorage.setItem('photo', profile_photo)
            $('.profile_photo').attr('src', profile_photo)
            customAlert('success', 'Foto profile berhasil diubah')
        },
        error: function(xhr) {
            let err = xhr.responseJSON.errors
            // console.clear()
            console.log(err)
        }
    })
})

$('#pass').submit(function(e) {
    // console.clear()
    $('.is-invalid').removeClass('is-invalid')
    e.preventDefault()
    addLoading()
    let formData = new FormData($('#pass')[0])
    formData.append('old_password', $('#password').val())
    formData.append('password', $('#npassword').val())
    formData.append('password_confirmation', $('#cpassword').val())
    $.ajax({
        url: `${api_url}password_reset`,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            // console.log(response)
            customAlert('success', 'Password berhasil diubah')
            removeLoading('Ubah Password')
            $('input').val('')
        },
        error: function(xhr) {
            let err = xhr.responseJSON.errors
            // console.clear()
            // console.log(err)
            if(err) {
                if (err.old_password) {
                    if (err.old_password == 'The old password field is required.') {
                        $('#password').addClass('is-invalid')
                        $('#password-feedback').html('Masukkan password lama')
                    }
                }
                if (err.password) {
                    if (err.password == 'The password field is required.') {
                        $('#npassword').addClass('is-invalid')
                        $('#npassword-feedback').html('Masukkan password baru')
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
            }
            else if (xhr.responseJSON.data.message == 'old password is wrong') {
                $('#password').addClass('is-invalid')
                $('#password-feedback').html('Password lama salah')
            }
            removeLoading('Ubah Password')
        }
    })
})
