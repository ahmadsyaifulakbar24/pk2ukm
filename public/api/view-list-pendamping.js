get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}companion`,
        type: 'GET',
        data: {
            page: page,
            parent_user_id: id
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
