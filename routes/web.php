<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.default');
});

Route::get('/dadospessoais', function () {
    return view('dashboard.dadospessoais');
});

Route::get('/veiculos', function () {
    return view('dashboard.veiculos');
});

Route::get('/avisos', function () {
    return view('dashboard.avisos');
});

Route::get('/multas', function () {
    return view('dashboard.multas');
});

Route::get('/reclamações', function () {
    return view('dashboard.reclamacao');
});

Route::get('/chave', function () {
    return view('dashboard.minhaChave');
});

Route::get('/dados', function () {
    return view('dashboard.dadosPessoais');
});



Route::get('/moradores', function () {
    return view('dashboard.moradores');
});

Route::get('/visitantes', function () {
    return view('dashboard.visitantesFrequentes');
});

Route::get('/veiculos', function () {
    return view('dashboard.veiculos');
});

Route::get('/pets', function () {
    return view('dashboard.pets');
});

Route::get('/reservar/salao', function () {
    return view('dashboard.reservarQuadra');
});

Route::get('/reservar/quadra', function () {
    return view('dashboard.reservarSalao');
});






// Pagina Auth

Route::get('/login', [AuthController::class, 'index']);
Route::get('/login/register', [AuthController::class, 'create']);
Route::post('/login/register', [AuthController::class, 'store']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
