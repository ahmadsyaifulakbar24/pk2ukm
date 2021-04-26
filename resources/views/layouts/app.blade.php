<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') - PK2UKM</title>
	<link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/loader.css')}}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
	@yield('style')
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
        <div class="form-inline">
            <i class="mdi mdi-menu mdi-24px d-block d-lg-none pointer text-dark mr-2" id="menu"></i>
            <a class="navbar-brand d-none d-lg-block" href="{{url('dashboard')}}">
				<img src="{{asset('assets/images/logo.png')}}" width="150" class="d-inline-block align-top mr-2" alt="Logo" loading="lazy">
            </a>
        </div>
        <div class="dropdown ml-auto">
            <a id="dropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            	<img src="{{asset('assets/images/user.png')}}" class="avatar rounded-circle" width="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right rounded border-0" aria-labelledby="dropdownMenu">
            	<!-- <div class="text-center my-3 px-3 text-break">
	            	<img src="{{asset('assets/images/photo.png')}}" class="avatar rounded-circle" width="75">
	            	<h6 class="name text-truncate pt-3 mb-0"></h6>
	            	<small class="level text-secondary"></small>
	            </div> -->
            	<div class="dropdown-item d-flex align-items-center">
	            	<img src="{{asset('assets/images/user.png')}}" class="avatar rounded-circle align-self-center" width="50">
	            	<div class="ml-3 text-truncate">
		            	<div class="name text-truncate"></div>
		            	<!-- <div class="small text-secondary">Ubah profil</div> -->
		            </div>
	            </div>
	            <div class="dropdown-divider"></div>
                <!-- <a href="{{url('password')}}" class="dropdown-item" role="button">
                    <i class="mdi mdi-18px mdi-lock-outline"></i><span>Ubah password</span>
                </a> -->
                <a class="dropdown-item" id="logout" role="button">
                    <i class="mdi mdi-18px mdi-login-variant"></i><span>Logout</span>
                </a>
            </div>
        </div>
    </nav>
	<div class="sidebar">
		<div class="py-2 pl-3 border-bottom">
			<img src="{{asset('assets/images/logo.png')}}" width="150" class="d-inline-block align-top mr-2" alt="Logo" loading="lazy">
		</div>
		<small class="text-secondary text-uppercase font-weight-bold">Menu</small>
        @if(session("role") == 1 || session("role") == 100)
        <a href="{{url('dashboard')}}" class="{{Request::is('dashboard')?'active':''}}">
            <i class="mdi mdi-apps mdi-18px"></i><span>Dashboard</span>
        </a>
        <a href="{{url('data-skpd')}}" class="{{Request::is('data-skpd')?'active':''}}">
            <i class="mdi mdi-account-badge-horizontal-outline mdi-18px"></i><span>Data SKPD</span>
        </a>
        <a href="{{url('kinerja-anggaran')}}" class="{{Request::is('kinerja-anggaran')?'active':''}}">
            <i class="mdi mdi-chart-line mdi-18px"></i><span>Kinerja Anggaran</span>
        </a>
        <a href="{{url('peserta-pelatihan')}}" class="{{Request::is('peserta-pelatihan')?'active':''}}">
            <i class="mdi mdi-account-group-outline mdi-18px"></i><span>Peserta Pelatihan</span>
        </a>
        <a href="{{url('pendamping-pelatihan')}}" class="{{Request::is('pendamping-pelatihan')?'active':''}}">
            <i class="mdi mdi-account-supervisor-outline mdi-18px"></i><span>Pendamping Pelatihan</span>
        </a>
        <a href="{{url('bantuan')}}" class="{{Request::is('bantuan')?'active':''}}">
            <i class="mdi mdi-help-circle-outline mdi-18px"></i><span>Bantuan</span>
        </a>
        @elseif(session("role") == 200)
        <a href="{{url('dinkot/dashboard')}}" class="{{Request::is('dinkot/dashboard')?'active':''}}">
            <i class="mdi mdi-apps mdi-18px"></i><span>Dashboard</span>
        </a>
		<a href="{{url('dinkot/data-skpd')}}" class="{{Request::is('dinkot/data-skpd')?'active':''}}">
			<i class="mdi mdi-account-badge-horizontal-outline mdi-18px"></i><span>Data SKPD</span>
		</a>
		<a href="{{url('dinkot/kinerja-anggaran')}}" class="{{Request::is('dinkot/kinerja-anggaran')?'active':''}}">
			<i class="mdi mdi-chart-line mdi-18px"></i><span>Kinerja Anggaran</span>
		</a>
        <a href="{{url('dinkot/data-pelatihan')}}" class="{{Request::is('dinkot/data-pelatihan')?'active':''}}">
            <i class="mdi mdi-account-group-outline mdi-18px"></i><span>Data Pelatihan</span>
        </a>
        <a href="{{url('dinkot/data-pendamping')}}" class="{{Request::is('dinkot/data-pendamping')?'active':''}}">
            <i class="mdi mdi-account-supervisor-outline mdi-18px"></i><span>Data Pendamping</span>
        </a>
		<a href="{{url('bantuan')}}" class="{{Request::is('bantuan')?'active':''}}">
			<i class="mdi mdi-help-circle-outline mdi-18px"></i><span>Bantuan</span>
		</a>
		@endif
		<small class="text-secondary" style="position:absolute;bottom:5px">2021 &copy; PK2UKM - Deputi Bidang Pengembangan SDM</small>
	</div>
	<div class="overlay"></div>
	<div class="main">@yield('content')</div>
	<div class="customAlert d-flex align-items-center small"></div>
	@include('layouts.partials.script')
	@yield('script')
</body>
</html>