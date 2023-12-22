<?php

use App\Http\Controllers\AuthController;
use App\Models\Cars;
use App\Models\Clents;
use App\Models\Doctors;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get(
    '/doctor',
    function () {
        return view('doctors', ['doctor' => Doctors::all()]);
    }
)->name('/name10');

Route::post('/save_doctor', function (Request $request) {
    Doctors::Create([
        'name' => $request->name,
    ]);

    return Doctors::all();
});

Route::get('/delete_doctor/{id}', function ($id) {
    Doctors::where('id', '=', $id)->first()->delete();
    return Doctors::all();
});

Route::get('/edit_doctor/{id}', function ($id) {
    return view('edit_doctor', ['doctor' => Doctors::where('id', '=', $id)->first()]);
});


Route::post('/save_edit_doctor/{id}', function ($id, Request $req) {
    Doctors::where('id', '=', $id)->first()->update([
        'name' => $req->name,
    ]);
    return Doctors::all();
});
















Route::get(
    '/patient',
    function () {
        return view('patients', ['patient' => Patients::all(), 'doctor' => Doctors::all()]);
    }
)->name('/name11');

Route::post('/save_patient', function (Request $request) {
    Patients::Create([
        'name' => $request->name,
        'doctor_id' => $request->doctor_id,
    ]);

    return Patients::all();
});

Route::get('/delete_patient/{id}', function ($id) {
    Patients::where('id', '=', $id)->first()->delete();
    return Patients::all();
});

Route::get('/edit_patient/{id}', function ($id) {
    return view('edit_patient', ['patient' => Patients::where('id', '=', $id)->first()]);
});


Route::post('/save_edit_patient/{id}', function ($id, Request $req) {
    Patients::where('id', '=', $id)->first()->update([
        'name' => $req->name,
    ]);
    return Patients::all();
});










Route::view('/register', 'register');
Route::view('/login', 'login')->name('login');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});
