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
        $('.nama').html(value.name)
		value.no_ktp != '' ? $('.no_ktp').html(value.no_ktp) : ''
		value.status != null ? $('#status').html(value.status) : ''
		value.gender != null ? $('#gender').html(value.gender) : ''
		value.place_birth != '' ? $('#place_birth').html(value.place_birth) : ''
		value.date_birth != null ? $('#date_birth').html(tanggal(value.date_birth)) : ''
		value.religion_id != null ? $('#religion_id').html(value.religion.param) : ''
		value.education_id != null ? $('#education_id').html(value.education.param) : ''
		value.home_address != '' ? $('#home_address').html(value.home_address) : ''
		value.districts_city_id != null ? $('#districts_city_id').html(value.districts_city.districts_city) : ''
		value.phone_number != '' ? $('#phone_number').html(value.phone_number) : ''
		value.email != '' ? $('#email').html(value.email) : ''
		$('.profile_photo').attr('src', value.profile_photo_url)
        
	    $('#card').show()
	    $('#loading').hide()
    }
})