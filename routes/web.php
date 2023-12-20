<?php

use App\Models\Cars;
use App\Models\Clents;
use App\Models\Doctors;
use App\Models\Patients;
use Illuminate\Http\Request;
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

    return back();
});

Route::get('/delete_patient/{id}', function ($id) {
    Patients::where('id', '=', $id)->first()->delete();
    return back();
});

Route::get('/edit_patient/{id}', function ($id) {
    return view('edit_patient', ['patient' => Patients::where('id', '=', $id)->first()]);
});


Route::post('/save_edit_patient/{id}', function ($id, Request $req) {
    Patients::where('id', '=', $id)->first()->update([
        'name' => $req->name,
    ]);
    return redirect()->route('/name11');
});

    






















// Route::get('/car',function () {
//     return view('cars', ['car' => Cars::all()]);
// }
// )->name('/name1');

// Route::post('/save_car', function(Request $request)
// {
//     Cars::Create([
//         'name'=> $request->name,
//     ]);

//     return back();
// });

// Route::get('/delete_car/{id}', function ($id) {
//     Cars::where('id', '=', $id)->first()->delete();
//     return back();
// });

// Route::get('/edit_car/{id}', function ($id) {
//     return view('edit_car', ['car' => Cars::where('id', '=', $id)->first()]);
// });

// Route::post('/edit_save_car', function(Request $request)
// {
//     Cars::Create([
//         'name'=> $request->name,

//     ]);

//     return redirect()->route('/name1');
// });

















// Route::get('/clent',function () {
//     return view('clent', ['clent' => Clents::all(),'car' => Cars::all()]);
// }
// )->name('/name2');

// Route::post('/save_clent', function (Request $request) {

//     Clents::create([
//         'name' => $request->name,
//         'color' => $request->color,
//         'price' => $request->price,
//     ]);

//     return back();
// });

// Route::get('/delete_clent/{id}', function ($id) {
//     Clents::where('id', '=', $id)->first()->delete();
//     return back();
// });

// Route::get('/edit_clent/{id}', function ($id) {
//     return view('edit_clent', ['clent' => Clents::where('id', '=', $id)->first()]);
// });

// Route::post('/edit_save_clent', function(Request $request)
// {
//     Clents::create([
//         'name' => $request->name,
//         'color' => $request->color,
//         'price' => $request->price,
//     ]);

//     return redirect()->route('/name1');
// });