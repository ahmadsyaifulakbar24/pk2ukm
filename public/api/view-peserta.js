$.ajax({
    url: `${api_url}participant/${id}/by_id`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function(result) {
    	let value = result.data
        // console.log(value)
        $('.nama').html(value.name)
		$('.id_number').html(value.id_number)
		$('#gender').html(value.gender)
		$('#place_birth').html(value.place_birth)
		$('#date_birth').html(tanggal(value.date_birth))
		$('#religion_id').html(value.religion_id.param)
		$('#education_id').html(value.education.param)
		$('#province_id').html(value.province.province)
		$('#districts_city_id').html(value.districts_city.districts_city)
		$('#phone_number').html(value.phone_number)
		$('#email').html(value.email)
		$('#business_status_id').html(value.business_status.param)
		if (value.business_status.id == 14) {
			$('#umkm').show()
			$('#business_sector_id').html(value.business_sector.param)
			$('#name_umkm').html(value.name_umkm)
			$('#address_umkm').html(value.address_umkm)
			$('#date_establishment_umkm').html(tanggal(value.date_establishment_umkm))
			$('#no_iumk').html(value.no_iumk)
			$('#position_umkm_id').html(value.position_umkm.param)
			$('#business_turnover').html(convert(value.business_turnover))
			$('#number_employees').html(value.number_employees)
		}
		else if (value.business_status.id == 15) {
			$('#koperasi').show()
			$('#name_koperasi').html(value.name_koperasi)
			$('#address_koperasi').html(value.address_koperasi)
			$('#type_koperasi_id').html(value.type_koperasi.param)
			$('#date_establishment_koperasi').html(tanggal(value.date_establishment_koperasi))
			$('#registrasion_number_koperasi').html(value.registrasion_number_koperasi)
			$('#position_koperasi_id').html(value.position_koperasi.param)
	    }
		$('#m1').html(value.monitoring.m1)
		$('#m2_id').html(value.monitoring.m2.param)
		$('#m3').html(value.monitoring.m3)
		$('.profile_photo').attr('src', value.profile_photo)

		$('#card').show()
		$('#loading').hide()
    }
})