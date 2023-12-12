<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TransitionController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

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
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Admin-dashboard', function () {
    return view('pagecotisa.superadmin.superadmin');
})->middleware(['auth', 'verified'])->name('admin_dashboard');

Route::get('/Employe-dashboard', function () {
    return view('pagecotisa.employe.page1employe');
})->middleware(['auth', 'verified'])->name('employe_dashboard');

Route::get('/Employeur-dashboard', function () {
    return view('pagecotisa.employeur.page1employeur');
})->middleware(['auth', 'verified'])->name('employeur_dashboard');

Route::get('/Retraite-dashboard', function () {
    return view('pagecotisa.retraite.page1retraite');
})->middleware(['auth', 'verified'])->name('retraite_dashboard');

Route::get('/CNSS-dashboard', function () {
    return view('pagecotisa.cnss.page1cnss');
})->middleware(['auth', 'verified'])->name('cnss_dashboard');

Route::get('/Liste-utilisateurs', function () {
    $users=User::paginate();
    return view('pagecotisa.superadmin.liste_utilisateurs', compact('users'));
})->middleware(['auth', 'verified'])->name('liste_utilisateurs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/validation/{userId}', [TransitionController::class, 'validation'])->name('validation');
});

require __DIR__.'/auth.php';




Route::get('/pagetransition', [TransitionController::class, 'transition'])->name('transition');

Route::get('/pageinscription', [TransitionController::class, 'inscription'])->name('inscription');
Route::post('/pageinscription', [TransitionController::class, 'compte'])->name('creationcompte');
Route::post('/pageajouterutilisateur', [TransitionController::class, 'ajouterutilisateur'])->name('ajouterutilisateur');

Route::get('/pageidentification', [TransitionController::class, 'identification'])->name('identification');

Route::get('/page2employeur', [TransitionController::class, 'declaration'])->name('declaration');
Route::post('/page2employeur', [TransitionController::class, 'declarer'])->name('declarer');
Route::get('/Liste-des-declares', [TransitionController::class, 'liste_des_declares'])->name('liste_des_declares');

Route::get('/page2employe', [TransitionController::class, 'cotisation'])->name('cotisation');

Route::get('/page2retraite', [TransitionController::class, 'espacepension'])->name('espacepension');


Route::get('/liste', [TransitionController::class, 'index2'])->name('liste');

Route::get('/liste_utilisateurs/{id}delete', [TransitionController::class, 'delete'])->name('supprimer');

Route::get('/liste_des_declares/{id}delete', [EmployeController::class, 'delete'])->name('supprimer2');


Route::get('/modifier/{id}', [TransitionController::class, 'edit'])->name('modifier');

Route::post('/modifier/traitement', [TransitionController::class, 'modifier_traitement'])->name('modifier_traitement');






Route::post('/accueil', [TransitionController::class, 'store'])->name('accueil');

Route::get('/politiquecotisa', [TransitionController::class, 'presentation'])->name('politiquecotisa');


// ----route pour resource---
Route::resource('/test', TransitionController::class);

