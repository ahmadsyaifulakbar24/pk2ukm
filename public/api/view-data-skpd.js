$.ajax({
    url: `${api_url}skpd/${id}/get_by_province`,
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function (result) {
        $.each(result.data, function(index, value) {
        	// console.log(value)
	    	districts_city = ''
			name_dinas = ''
			nip_dinas = ''
			name_responsible_person = ''
			phone_number_dinas = ''
			phone_number_responsible_person = ''
        	value.districts_city != null ? districts_city = value.districts_city.districts_city : districts_city = ''
        	if (value.skpd != null) {
        		name_dinas = value.skpd.name_dinas
        		nip_dinas = value.skpd.nip_dinas
        		name_responsible_person = value.skpd.name_responsible_person
        		phone_number_dinas = value.skpd.phone_number_dinas
        		phone_number_responsible_person = value.skpd.phone_number_responsible_person
        	}
            append = `<div class="col-xl-6 mb-4">
				<div class="card card-custom card-height">
					<div class="card-header">
						<h6 class="mb-0">${value.name}</h6>
					</div>
					<div class="card-body">
		                <div class="row">
		                    <label class="col-form-label col-6">Provinsi</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${value.province.province}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Kab/Kota</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${districts_city}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Nama Kepala Dinas</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${name_dinas}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">NIP Kepala Dinas</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${nip_dinas}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Telp/HP Kepala Dinas</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${phone_number_dinas}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Nama Penanggung Jawab Operasional Harian DAK dan Non Fisik PK2UMKM</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${name_responsible_person}</div>
		                </div>
		                <div class="row">
		                    <label class="col-form-label col-6">Telp/HP Penanggung Jawab Operasional Harian DAK dan Non Fisik PK2UMKM</label>
		                    <div class="col-form-label col text-center">:</div>
		                    <div class="col-form-label col-5">${phone_number_responsible_person}</div>
		                </div>
	                </div>
				</div>
			</div>`
	        $('#data').append(append)
        })
        $('#card').show()
        $('#loading').hide()
    }
})