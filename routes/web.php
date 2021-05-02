<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('session/login', [SessionController::class, 'createSession']);
Route::get('session/logout', [SessionController::class, 'deleteSession']);

Route::group(['middleware'=>['afterMiddleware']], function () {
	Route::get('/', function () {
		return redirect('login');
	});
	Route::get('login', function () { //done
		return view('auth/login');
	});
});

Route::group(['middleware'=>['beforeMiddleware']], function () {
    Route::group(['middleware'=>['adminMiddleware']], function () {
        Route::get('dashboard', function () { //done
            return view('dashboard');
        });

        Route::get('data-skpd', function () { //done
            return view('data-skpd');
        });
        Route::get('data-skpd/{id}', function ($id) { //done
            return view('view-data-skpd', compact('id'));
        });

        Route::get('kinerja-anggaran', function () { //done
            return view('kinerja-anggaran');
        });
        Route::get('kinerja-anggaran/{id}', function ($id) { //done
            return view('view-kinerja-anggaran', compact('id'));
        });

        Route::get('peserta-pelatihan', function () { //done
            return view('peserta-pelatihan');
        });
        Route::get('peserta-pelatihan/{id}', function ($id) { //done
            return view('view-peserta-pelatihan', compact('id'));
        });
        Route::get('list-kegiatan/{id}', function ($id) { //done
            return view('view-list-kegiatan', compact('id'));
        });

        Route::get('pendamping-pelatihan', function () { //done
            return view('pendamping-pelatihan');
        });
        Route::get('pendamping-pelatihan/{id}', function ($id) { //done
            return view('view-pendamping-pelatihan', compact('id'));
        });
        Route::get('list-pendamping/{id}', function ($id) { //done
            return view('view-list-pendamping', compact('id'));
        });
    });

    Route::group(['middleware'=>['pendampingMiddleware']], function () {
        Route::get('pendamping/dashboard', function () {
            return view('dinkot/dashboard');
        });
    });

    Route::group(['middleware'=>['dinkotMiddleware']], function () {
        Route::get('dinkot/dashboard', function () {
            return view('dinkot/dashboard');
        });

        Route::get('dinkot/data-skpd', function () { //done
            return view('dinkot/data-skpd');
        });
        Route::get('dinkot/data-skpd/update', function () { //done
            return view('dinkot/update-data-skpd');
        });

        Route::get('dinkot/kinerja-anggaran', function () { //done
            return view('dinkot/kinerja-anggaran');
        });
        Route::get('dinkot/kinerja-anggaran/update', function () { //done
            return view('dinkot/update-kinerja-anggaran');
        });

        Route::get('dinkot/data-pelatihan', function () { //done
            return view('dinkot/data-pelatihan');
        });
        Route::get('kegiatan/create', function () { //done
            return view('dinkot/create-kegiatan');
        });
        Route::get('kegiatan/edit/{id}', function ($id) { //done
            return view('dinkot/edit-kegiatan', compact('id'));
        });
	    Route::get('peserta/create/{id}', function ($id) { //done
	        return view('dinkot/create-peserta', compact('id'));
	    });
	    Route::get('peserta/edit/{id}', function ($id) { //done
	        return view('dinkot/edit-peserta', compact('id'));
	    });

        Route::get('dinkot/data-pendamping', function () { //done
            return view('dinkot/data-pendamping');
        });
        Route::get('pendamping/create', function () { //done
            return view('dinkot/create-pendamping');
        });
        Route::get('pendamping/edit/{id}', function ($id) { //done
            return view('dinkot/edit-pendamping', compact('id'));
        });
    });

    Route::get('kegiatan/{id}', function ($id) { //done
        return view('view-kegiatan', compact('id'));
    });
    Route::get('peserta/{id}', function ($id) { //done
        return view('view-peserta', compact('id'));
    });
    Route::get('pendamping/{id}', function ($id) { //done
        return view('view-pendamping', compact('id'));
    });

	Route::get('daftar/{id}', function ($id) {
	    return view('daftar', compact('id'));
	});

	Route::get('bantuan', function () { //done
	    return view('bantuan');
	});

    Route::get('unduh-kegiatan', function() {
        return view('export/kegiatan-lengkap');
    });

    Route::get('unduh-peserta/{training_id}', function($training_id) {
        return view('export/peserta-pelatihan', compact('training_id'));
    });

    Route::get('unduh-profile-peserta/{peserta_id}', function($peserta_id) {
        return view('export/profile-peserta', compact('peserta_id'));
    });

    Route::get('unduh-pendamping-lengkap/{param}', function($param) {
        return view('export/pendamping-lengkap', compact('param'));
    });

    Route::get('unduh-pendamping-lengkap/by_user/{user_id}', function($user_id) {
        return view('export/pendamping-lengkap', ['param' => 'user_id', 'user_id' => $user_id]);
    });
    
    Route::get('unduh-skpd-lengkap', function() {
        return view('export/skpd-lengkap');
    });

    Route::get('unduh-kinerja-anggaran', function() {
        return view('export/kinerja-anggaran');
    });
});

