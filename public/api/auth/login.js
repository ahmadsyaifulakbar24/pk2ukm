if (localStorage.getItem('token')) get_logout('Session cleared')

$('form').submit(function (e) {
    addLoading()
    e.preventDefault()
    $('.alert').hide()
    const username = $('#username').val()
    const password = $('#password').val()
    $.ajax({
        url: `${api_url}login`,
        type: 'POST',
        data: {
            username: username,
            password: password
        },
        success: function (result) {
            let value = result.data
            // console.log(value)
            localStorage.setItem('token', value.access_token)
            localStorage.setItem('user', value.user.id)
            localStorage.setItem('name', value.user.name)
            localStorage.setItem('role', value.user.role_id)
            if (value.user.profile_photo_url != `${root}storage/`) {
	            localStorage.setItem('photo', value.user.profile_photo_path)
	        }
            $.ajax({
                url: `${root}session/login`,
                type: 'GET',
                data: {
                    token: value.access_token,
                    role: value.user.role_id
                },
                success: function (result) {
                	if (value.user.role_id == 1 || value.user.role_id == 100) {
	                    location.href = `${root}dashboard`
                	} else {
	                    location.href = `${root}dinkot/dashboard`
	                }
                }
            })
        },
        error: function (xhr) {
            // let err = JSON.parse(xhr.responseText)
            // console.log(err)
            $('.alert').show()
            removeLoading('Login')
        }
    })
})
