if (role == 200) {
	$('.compose').show()
	$('#dinkot').removeClass('none')
} else {
	$('#admin').removeClass('none')
}

get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}companion`,
        type: 'GET',
        data: {
            page: page,
            user_id: user
        },
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Bearer " + token)
        },
        success: function(result) {
            $('#table').html('')
            $('#loading').hide()
            if (result.data.length > 0) {
	            $('#data').show()
                let from = result.meta.from
                let year = new Date()
                $.each(result.data, function(index, value) {
		            // console.log(value)
		            if (role == 200) {
						append = `<tr>
			            	<td class="text-center">${from}.</td>
			            	<td><a href="${root}peserta/${value.id}">${value.name}</a></td>
			            	<td class="text-capitalize">${value.gender}</td>
			            	<td class="text-truncate">${parseInt(year.getFullYear()) - parseInt(value.date_birth)} Tahun</td>
			            	<td>${value.phone_number}</td>
			            	<td><a href="${root}peserta/edit/${value.id}" class="btn btn-block btn-sm btn-outline-primary">Edit</a></td>
			            	<td><div class="btn btn-block btn-sm btn-outline-danger">Delete</div></td>
			            </tr>`
			        } else {
						append = `<tr>
			            	<td class="text-center">${from}.</td>
			            	<td><a href="${root}peserta/${value.id}">${value.name}</a></td>
			            	<td class="text-capitalize">${value.gender}</td>
			            	<td class="text-truncate">${parseInt(year.getFullYear()) - parseInt(value.date_birth)} Tahun</td>
			            	<td>${value.phone_number}</td>
			            </tr>`
			        }
                    $('#table').append(append)
                    from++
                })
	            pagination(result.links, result.meta, result.meta.path)
            } else {
                $('#empty').show()
            }
            $('#card').show()
            $('#loading').hide()
        }
    })
}
