<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    UserController,
    AprovalController,
    PangkalanController,
    AgenController,
    TypeController
};

Route::group(
    ['middleware' => 'guest:user'],
    function () {
        Route::get('/',[UserController::class,'index'])->name('/');
        Route::post('login',[UserController::class,'login'])->name('login');
});

Route::group(
    ['middleware' => ['web', 'auth:user']],
    function () {
        Route::get('home', [HomeController::class,'index'])->name('home');
        Route::post('logout', [UserController::class,'logout'])->name('logout');

        // aproval
        Route::get('aproval',[AprovalController::class,'index'])->name('aproval');
        Route::post('aproval-up',[AprovalController::class,'updates'])->name('aproval-up');
        
        // pangkalan
        Route::get('pangkalan',[PangkalanController::class,'index'])->name('pangkalan');
        Route::get('pangkalan-form',[PangkalanController::class,'add'])->name('pangkalan-form');
        Route::post('pangkalan-simpan',[PangkalanController::class,'simpan'])->name('pangkalan-simpan');
        Route::post('pangkalan-update',[PangkalanController::class,'update'])->name('pangkalan-update');
        Route::get('pangkalan-edit/{id}',[PangkalanController::class,'edit'])->name('pangkalan-edit');
        Route::get('pangkalan-hapus/{id}',[PangkalanController::class,'hapus'])->name('pangkalan-hapus');
        
        // agen
        Route::get('agen',[AgenController::class,'index'])->name('agen');
        Route::get('agen-add',[AgenController::class,'add'])->name('agen-add');
        Route::post('agen-simpan/{id?}',[AgenController::class,'simpan'])->name('agen-simpan');
        Route::get('agen-edit/{id}',[AgenController::class,'edit'])->name('agen-edit');
        Route::get('agen-hapus/{id}',[AgenController::class,'hapus'])->name('agen-hapus');
        
        // type
        Route::get('type',[TypeController::class,'index'])->name('type');
        Route::post('type-add/{id?}',[TypeController::class,'create'])->name('type-add');
        Route::get('type-hapus/{id?}',[TypeController::class,'hapus'])->name('type-hapus');

        // user
        Route::get('user', [UserController::class,'user'])->name('user');
        Route::get('user-add', [UserController::class,'addUser'])->name('user-add');
        Route::post('user-simpan', [UserController::class,'simpanUser'])->name('user-simpan');

});
