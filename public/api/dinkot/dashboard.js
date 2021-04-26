$.ajax({
    url: `${api_url}user`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
    	let value = result.data
    	console.log(value)
    	$('#title').html(`${value.user.name} Peserta`)
    }
})
