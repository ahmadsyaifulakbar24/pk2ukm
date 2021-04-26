$.ajax({
    url: `${api_url}budged_performance/persentase_budged_realization`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
    	let value = result.data
    	value.total_budged_realization != null ? realisasi_anggaran = value.total_budged_realization : realisasi_anggaran = 0
    	value.total_participant_realization != null ? realisasi_peserta = value.total_participant_realization : realisasi_peserta = 0
    	value.total_companion_realization != null ? realisasi_pendamping = value.total_companion_realization : realisasi_pendamping = 0
    	value.persentase_budged_realization != null ? persentase_anggaran = value.persentase_budged_realization : persentase_anggaran = 0
    	value.persentase_participant_realization != null ? persentase_peserta = value.persentase_participant_realization : persentase_peserta = 0
    	value.persentase_companion_realization != null ? persentase_pendamping = value.persentase_companion_realization : persentase_pendamping = 0
    	$('#realisasi_anggaran').html(rupiah(realisasi_anggaran))
    	$('#realisasi_peserta').html(`${realisasi_peserta} Peserta`)
    	$('#realisasi_pendamping').html(`${realisasi_pendamping} Pendamping`)
    	$('#persentase_anggaran').html(`${persentase_anggaran}%`)
    	$('#persentase_peserta').html(`${persentase_peserta}%`)
    	$('#persentase_pendamping').html(`${persentase_pendamping}%`)
    }
})

$.ajax({
    url: `${api_url}report/total_participant_by_gender`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
        let value = result.data
		let dataChart = []
        dataChart.push(value.total_laki_laki)
        dataChart.push(value.total_perempuan)
		new Chart(document.getElementById('chartGender'), {
		    type: 'doughnut',
		    data: {
		        labels: ['Laki-Laki', 'Perempuan'],
		        datasets: [{
		            label: 'Jenis Kelamin',
		            data: dataChart,
		            backgroundColor: [
		                'rgb(255, 99, 132)',
		                'rgb(54, 162, 235)'
		            ],
		            hoverOffset: 4
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		})
    }
})

$.ajax({
    url: `${api_url}report/total_participant_by_religion`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
		let labelChart = [],
		    dataChart = []
        $.each(result.data, function(index, value) {
            labelChart.push(value.religion)
            dataChart.push(value.total)
        })
		new Chart(document.getElementById('chartReligion'), {
		    type: 'doughnut',
		    data: {
		        labels: labelChart,
		        datasets: [{
		            label: 'Agama',
		            data: dataChart,
		            backgroundColor: [
		                'rgb(255, 99, 132)',
		                'rgb(54, 162, 235)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)'
		            ],
		            hoverOffset: 4
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		})
    }
})

$.ajax({
    url: `${api_url}report/total_participant_by_training_type`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
        let value = result.data
		let labelChart = [],
			dataChart = []
        $.each(result.data, function(index, value) {
            labelChart.push(value.training_type)
            dataChart.push(value.total)
        })
		new Chart(document.getElementById('chartTraining'), {
		    type: 'bar',
		    data: {
		        labels: labelChart,
		        datasets: [{
		            label: 'Total Peserta',
		            data: dataChart,
		            backgroundColor: [
		                'rgb(255, 99, 132)',
		                'rgb(54, 162, 235)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)'
		            ],
		            hoverOffset: 4
		        }]
		    },
		    options: {
		    	indexAxis: 'y',
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		})
    }
})

$.ajax({
    url: `${api_url}report/total_participant_by_education`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
        let value = result.data
		let labelChart = [],
			dataChart = []
        $.each(result.data, function(index, value) {
            labelChart.push(value.education)
            dataChart.push(value.total)
        })
		new Chart(document.getElementById('chartEducation'), {
		    type: 'bar',
		    data: {
		        labels: labelChart,
		        datasets: [{
		            label: 'Total Peserta',
		            data: dataChart,
		            backgroundColor: [
		                'rgb(255, 99, 132)',
		                'rgb(54, 162, 235)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)'
		            ],
		            hoverOffset: 4
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		})
    }
})

$.ajax({
    url: `${api_url}report/total_participant_by_business_status`,
    type: 'GET',
    beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('token'))
    },
    success: function(result) {
    	let labelChart = [],
    		dataChart = []
        $.each(result.data, function(index, value) {
            labelChart.push(value.business_status)
            dataChart.push(value.total)
        })
		new Chart(document.getElementById('chartStatus'), {
		    type: 'doughnut',
		    data: {
		        labels: labelChart,
		        datasets: [{
		            label: 'Status Usaha',
		            data: dataChart,
		            backgroundColor: [
		                'rgb(255, 99, 132)',
		                'rgb(54, 162, 235)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)',
		                'rgb(255, 99, 132)'
		            ],
		            hoverOffset: 4
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		})
    }
})
