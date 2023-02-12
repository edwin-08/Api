<?php

use App\Http\Controllers\ControllerUsuarios;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cors']], function () {
    Route::post('register_user', [ControllerUsuarios::class, 'registrar_usuario_ruta']);
});


