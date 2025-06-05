<?php

use App\Http\Controllers\AtmController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/add-atm', [AtmController::class, 'store'])->name('atms.store');
Route::get('/add-atm', function () {
    return view('add-atm');
});
Route::get('/atm-manage', [AtmController::class, 'index'])->name('atms.index');
Route::get('/show-atms', [AtmController::class, 'show'])->name('atms.show');
Route::get('/edit-atm/{id}', [AtmController::class, 'edit'])->name('atms.edit');
Route::post('/edit-atm/{id}', [AtmController::class, 'update'])->name('atms.update');
Route::delete('/delete-atm/{id}', [AtmController::class, 'destroy'])->name('atms.destroy');
Route::get('/search-atms', [AtmController::class, 'searchAtms'])->name('atms.search');

Route::post('/maintenance/add-maintenance', [MaintenanceController::class, 'store'])->name('maintenance.store');
Route::post('/users/add-user', [UserController::class, 'store'])->name('users.store');
Route::get('/users/add-user', function () {
    return view('users.add-user');
})->name('users.add');

Route::get('/maintenance/maintenance-schedule', [MaintenanceController::class, 'schedule'])->name('atms.schedule');

Route::get('/maintenance/{id}', [MaintenanceController::class, 'show'])->name('maintenance.show');
Route::get('/maintenance/{id}/edit', [MaintenanceController::class, 'edit'])->name('maintenance.edit');


Route::get('/reports', function () {
    return view('reports');
});
Route::get('/reports/{id}', function ($id) {
    return view('report', ['id' => $id]);
});
route::get('/tickets', function () {
    return view('tickets');
});
Route::get('/tickets/{id}', function ($id) {
    return view('ticket', ['id' => $id]);
});
Route::get('/tickets/{id}/edit', function ($id) {
    return view('ticket-edit', ['id' => $id]);
});
Route::get('/tickets/{id}/delete', function ($id) {
    return view('ticket-delete', ['id' => $id]);
});
