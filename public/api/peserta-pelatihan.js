$.ajax({
    url: `${api_url}report/total_training_by_province`,
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token)
    },
    success: function (result) {
        $.each(result.data, function(index, value) {
        	// console.log(value)
            append = `<div class="col-md-6 col-xl-4 mb-4">
				<a href="peserta-pelatihan/${value.id}">
					<div class="card card-custom">
						<div class="card-body">
							<h6>${value.province}</h6>
							<div class="d-flex justify-content-between align-items-center">
								<i class="mdi mdi-account-group-outline mdi-36px"></i>
								<h5 class="mb-0">${value.total_training} Pelatihan</h5>
							</div>
						</div>
					</div>
				</a>
			</div>`
	        $('#data').append(append)
        })
        $('#card').show()
        $('#loading').hide()
    }
})