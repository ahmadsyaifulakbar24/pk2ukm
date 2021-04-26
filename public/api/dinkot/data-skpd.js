$.ajax({
    url: `${api_url}skpd/${user}`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
    	let value = result.data
        // console.log(value)
    	value.user.districts_city != null ? districts_city = value.user.districts_city.districts_city : districts_city = ''
        $('#province').html(value.user.province.province)
        $('#districts_city').html(districts_city)
        $('#name_dinas').html(value.name_dinas)
        $('#nip_dinas').html(value.nip_dinas)
        $('#phone_number_dinas').html(value.phone_number_dinas)
        $('#name_responsible_person').html(value.name_responsible_person)
        $('#phone_number_responsible_person').html(value.phone_number_responsible_person)
    	$('#edit').show()
        $('#card').show()
        $('#loading').hide()
    },
    error: function(xhr) {
    	// console.log(xhr)
    	console.clear()
    	if (xhr.responseJSON.data.message == "data not found") get_user()
    }
})

function get_user() {
	$.ajax({
	    url: `${api_url}user`,
	    type: 'GET',
	    data: {
	    	user_id: localStorage.getItem('user')
	    },
	    beforeSend: function(xhr) {
	        xhr.setRequestHeader("Authorization", "Bearer " + token)
	    },
	    success: function(result) {
	    	let value = result.data
	    	// console.log(value)
	    	value.districts_city != null ? districts_city = value.districts_city.districts_city : districts_city = ''
        	$('#province').html(value.province.province)
        	$('#districts_city').html(districts_city)
        	$('#add').show()
	        $('#card').show()
	        $('#loading').hide()
	    }
	})
}
