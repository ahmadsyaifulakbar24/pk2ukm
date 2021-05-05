get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}training/all/${user}`,
        type: 'GET',
        data: {
            page: page
        },
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            $('#table').html('')
            $('#loading').hide()
            if (result.data.length > 0) {
	            $('#card').show()
                let from = result.meta.from
                $.each(result.data, function(index, value) {
		            // console.log(value)
		            value.status == 'publish' ? status = 'Dibuka' : status = 'Ditutup'
					append = `<tr data-id="${value.id}" data-name="${value.training_title}">
		            	<td class="text-center">${from}.</td>
		            	<td><a href="${root}kegiatan/${value.id}">${value.training_title}</a></td>
		            	<td>${value.districts_city.districts_city}</td>
		            	<td>${tanggal(value.start_date)} s.d ${tanggal(value.finish_date)}</td>
		            	<td>${value.user.name}</td>
		            	<td class="text-center">${value.total_participant}</td>
		            	<td>${status}</td>
		            	<td><a href="${root}kegiatan/edit/${value.id}" class="btn btn-block btn-sm btn-outline-primary">Edit</a></td>
		            	<td><div class="btn btn-block btn-sm btn-outline-danger remove">Delete</div></td>
		            </tr>`
                    $('#table').append(append)
                    from++
                })
	            pagination(result.links, result.meta, result.meta.path)
            } else {
                $('#empty').show()
            }
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
    $('#card').hide()
    $('#loading').show()
    $(this).attr('disabled', true)
    let id = $(this).data('id')
    $.ajax({
        url: `${api_url}training/${id}/delete`,
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