get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}companion`,
        type: 'GET',
        data: {
            page: page,
            parent_user_id: user
        },
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
        	// console.log(result)
            $('#table').html('')
            $('#loading').hide()
            if (result.data.length > 0) {
	            $('#data').show()
                let year = new Date()
                $.each(result.data, function(index, value) {
		            // console.log(value)
		            value.gender != null ? jenis_kelamin = value.gender : jenis_kelamin = ''
		            value.date_birth != null ? tanggal_lahir = parseInt(year.getFullYear()) - parseInt(value.date_birth) + ' Tahun' : tanggal_lahir = ''
		            value.phone_number != null ? nomor_telepon = value.phone_number : nomor_telepon = ''
					append = `<tr data-id="${value.user_id}" data-name="${value.name}">
		            	<td class="text-center">${index + 1}.</td>
		            	<td><a href="${root}pendamping/${value.user_id}">${value.name}</a></td>
		            	<td class="text-capitalize">${jenis_kelamin}</td>
		            	<td class="text-truncate">${tanggal_lahir}</td>
		            	<td>${nomor_telepon}</td>
		            	<td><a href="${root}pendamping/edit/${value.user_id}" class="btn btn-block btn-sm btn-outline-primary">Edit</a></td>
		            	<td><div class="btn btn-block btn-sm btn-outline-danger remove">Delete</div></td>
		            </tr>`
                    $('#table').append(append)
                })
            } else {
                $('#empty').show()
            }
            $('#card').show()
            $('#loading').hide()
        }
    })
}

$(document).on('click', '.remove', function () {
    $('#modal-delete').modal('show')
    let id = $(this).closest('tr').data('id')
    let name = $(this).closest('tr').data('name')
    $('#delete').data('id', id)
    $('#modal-name').html(name)
})

$('#delete').click(function () {
    $('#data').hide()
    $('#loading').show()
    $(this).attr('disabled', true)
    let id = $(this).data('id')
    $.ajax({
        url: `${api_url}companion/${id}/delete`,
        type: 'DELETE',
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
        },
        success: function (result) {
            get_data()
            $('#delete').attr('disabled', false)
            $('#modal-delete').modal('hide')
        }
    })
})
