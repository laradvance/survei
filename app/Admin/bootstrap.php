<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 *
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 */
use App\Admin\Extensions\Nav;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid;

Grid::init(function (Grid $grid) {
    $grid->disableColumnSelector();
    $grid->disableExport();
    $grid->filter(function ($filter) {
        $filter->disableIdFilter();
    });
});

Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {
    $navbar->left(Nav\Shortcut::make([
        'Sampel'       => 'sampel/create',
        'Kelompok'     => 'kelompok/create',
        'Instansi'     => 'instansi/create',
        'Unit Layanan' => 'layanan/create',
        'Pengguna'     => 'auth/users/create',
        'Token'        => 'token',
    ], 'fa-plus')->title('Tambah'));
});

Encore\Admin\Form::forget(['map', 'editor']);
