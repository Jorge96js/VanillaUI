<?php

use Livewire\Volt\Volt;
use App\Models\Heladeria;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\HeladeriasController;


Route::get('/', function () {
    $heladerias = Heladeria::all();
    return view('welcome', compact('heladerias'));
})->name('home');

//Admin routes
Route::get('/dashboard',[AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//Rutas heladerias
Route::get('/dashboard/heladerias', [AdminController::class, 'heladerias'])->name('dashboard.heladerias');
Route::get('/dashboard/heladerias/crear', [AdminController::class, 'crear'])->name('dashboard.heladerias.crear');
Route::delete('/dashboard/heladerias/{heladeria}', [AdminController::class, 'destroy'])->name('dashboard.heladerias.destroy');
Route::get('/dashboard/heladerias/{heladeria}', [AdminController::class, 'update'])->name('dashboard.heladerias.update');
//Rutas sabores
Route::get('/dashboard/sabores', [AdminController::class, 'sabores'])->name('dashboard.sabores');
Route::get('/dashboard/sabores/crear', [AdminController::class, 'saboresCrear'])->name('dashboard.sabores.crear');
Route::delete('/dashboard/sabores/{sabor}', [AdminController::class, 'saboresDestroy'])->name('dashboard.sabores.destroy');
Route::get('/dashboard/sabores/{sabor}', [AdminController::class, 'saboresUpdate'])->name('dashboard.sabores.update');
//Rutas tortas
Route::get('/dashboard/tortas', [AdminController::class, 'tortas'])->name('dashboard.tortas');
Route::get('/dashboard/tortas/crear', [AdminController::class, 'tortasCrear'])->name('dashboard.tortas.crear');
Route::delete('/dashboard/tortas/{torta}', [AdminController::class, 'tortasDestroy'])->name('dashboard.tortas.destroy');
Route::get('/dashboard/tortas/{torta}', [AdminController::class, 'tortasUpdate'])->name('dashboard.tortas.update');
//rutas postres
Route::get('/dashboard/postres', [AdminController::class, 'postres'])->name('dashboard.postres');
Route::get('/dashboard/postres/crear', [AdminController::class, 'postresCrear'])->name('dashboard.postres.crear');
Route::delete('/dashboard/postres/{id}', [AdminController::class, 'postresDestroy'])->name('dashboard.postres.destroy');
Route::get('/dashboard/postres/{postre}', [AdminController::class, 'postresUpdate'])->name('dashboard.postres.update');

Route::post('/dashboard/landing-update', [AdminController::class, 'landingUpdate'])->name('dashboard.landing.update');


//Rutas locales
Route::get('/heladerias', [HeladeriasController::class, 'index'])->name('heladerias');
Route::get('/heladerias/{id}', [HeladeriasController::class, 'show'])->name('heladerias.show');

Route::get('/productos', function(){
    return view('products.productos');
})->name('productos');

Route::get('/sabores',[ProductosController::class, 'sabores'])->name('sabores');
Route::get('/tortas',[ProductosController::class, 'tortas'])->name('tortas');
Route::get('/postres',[ProductosController::class, 'postres'])->name('postres');


/*Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');*/

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});


