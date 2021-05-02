get_data()

function get_data(page) {
    $.ajax({
        url: `${api_url}user`,
        type: 'GET',
        data: {
            page: page,
            province_id: id
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
                    value.districts_city != null ? name = value.districts_city.districts_city : name = value.province.province
                    append = `<tr>
                    	<td class="text-center">${from}.</td>	
		            	<td><a href="${root}list-pendamping/${value.id}">${name}</a></td>
		            	<td class="text-center">${value.total_companion}</td>
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
