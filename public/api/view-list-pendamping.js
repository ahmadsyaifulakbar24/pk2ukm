get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}companion/all/${id}`,
        type: 'GET',
        data: {
            page: page
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
                let from = result.meta.from
                $.each(result.data, function(index, value) {
					append = `<tr>
		            	<td class="text-center">${from}.</td>
		            	<td><a href="${root}kegiatan/${value.id}">${value.training_title}</a></td>
		            	<td>${value.districts_city.districts_city}</td>
		            	<td>${tanggal(value.start_date)} s.d ${tanggal(value.finish_date)}</td>
		            	<td>${value.user.name}</td>
		            	<td class="text-center">${value.total_participant}</td>
		            </tr>`
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
