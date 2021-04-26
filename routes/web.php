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

        Route::get('pendamping-pelatihan', function () {
            return view('pendamping-pelatihan');
        });
        Route::get('pendamping-pelatihan/{id}', function ($id) {
            return view('view-pendamping-pelatihan', compact('id'));
        });
        Route::get('list-pendamping/{id}', function ($id) {
            return view('view-list-pendamping', compact('id'));
        });
    });

    Route::group(['middleware'=>['dinkotMiddleware']], function () {
        Route::get('dinkot/dashboard', function () {
            return view('dinkot/dashboard'); //done
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
        Route::get('dinkot/data-pelatihan/create', function () { //done
            return view('dinkot/create-kegiatan');
        });
        Route::get('dinkot/data-pelatihan/edit/{id}', function ($id) { //done
            return view('dinkot/edit-kegiatan', compact('id'));
        });
	    Route::get('peserta/create/{id}', function ($id) { //done
	        return view('dinkot/create-peserta', compact('id'));
	    });
	    Route::get('peserta/edit/{id}', function ($id) { //waiting_api
	        return view('dinkot/edit-peserta', compact('id'));
	    });

        Route::get('dinkot/data-pendamping', function () {
            return view('dinkot/data-pendamping');
        });
        Route::get('dinkot/data-pendamping/create', function () {
            return view('dinkot/create-pendamping');
        });
        Route::get('dinkot/data-pendamping/edit/{id}', function ($id) {
            return view('dinkot/edit-pendamping', compact('id'));
        });
    });

    Route::get('kegiatan/{id}', function ($id) { //done
        return view('view-kegiatan', compact('id'));
    });
    Route::get('peserta/{id}', function ($id) { //waitingapi
        return view('view-peserta', compact('id'));
    });
    Route::get('pendamping/{id}', function ($id) {
        return view('view-pendamping', compact('id'));
    });

	Route::get('bantuan', function () { //done
	    return view('bantuan');
	});
});
