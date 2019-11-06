<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('auth/users', 'PenggunaController')->names('admin.auth.users');
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/tabulasi', 'TabulasiController@index');
    $router->get('/tabulasi/{group?}/{id?}', 'TabulasiController@index');
    $router->resource('kelompok', KelompokController::class);
    $router->resource('instansi', InstansiController::class);
    $router->resource('layanan', LayananController::class);
    $router->resource('sampel', SampelController::class);
    $router->resource('jk', JkController::class);
    $router->resource('klasifikasi', KlasifikasiController::class);
    $router->resource('jam', JamController::class);
    $router->resource('pendidikan', PendidikanController::class);
    $router->resource('pekerjaan', PekerjaanController::class);
    $router->resource('periode', PeriodeController::class);
    $router->resource('token', TokenController::class)->only(['index', 'show', 'destroy']);
    $router->resource('saran', SaranController::class)->only(['index']);
});
