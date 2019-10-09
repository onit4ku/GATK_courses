<?php

use App\g_a_t_k_s;
use Illuminate\Http\Request;

// listar los registros
Route::get('g_a_t_k_s', function () {
    $registros = g_a_t_k_s::get();
    return $registros;
});

// listar un unico registro
Route::get('g_a_t_k_s/{email}', function ($email) {
    $registro = g_a_t_k_s::findOrFail($email);
    return $registro;
});

// nuevo registro
Route::post('g_a_t_k_s', function (Request $request) {
    $request->validate([
        'fullName' => 'required|max:50',
        'email' => 'required|max:60|email|unique:g_a_t_k_s',
        'commandLine' => 'required|max:50',
        'GATKfamiliar' => 'required|max:50',
        'analyzeData' => 'required|max:50',
        'researchInterests' => 'required|max:50',
        'institution' => 'required|max:50',
        'position' => 'required|max:50',
        'inputDinner' => 'required|max:50',
        'inputAlhambra' => 'required|max:50',
        'dietaryReq' => 'required|max:50',
        'payment' => 'required|max:50|boolean',
        'waitingList' => 'required|max:50|boolean',
    ]);
    $registro = new g_a_t_k_s;
    $registro->$request->input("fullName");
    $registro->$request->input("commandLine");
    $registro->$request->input("GATKfamiliar");
    $registro->$request->input("analyzeData");
    $registro->$request->input("researchInterests");
    $registro->$request->input("institution");
    $registro->$request->input("email");
    $registro->$request->input("position");
    $registro->$request->input("inputDinner");
    $registro->$request->input("inputAlhambra");
    $registro->$request->input("dietaryReq");
    $registro->$request->input("payment");
    $registro->$request->input("waitingList");
    $registro->save();
    return "Registro completado";
});

// actualizar registro
Route::put('g_a_t_k_s/{email}', function (Request $request, $email) {
    $request->validate([
        'fullName' => 'required|max:50',
        'email' => 'required|max:60|email|unique:g_a_t_k_s,email' . $email,
        'commandLine' => 'required|max:50',
        'GATKfamiliar' => 'required|max:50',
        'analyzeData' => 'required|max:50',
        'researchInterests' => 'required|max:50',
        'institution' => 'required|max:50',
        'position' => 'required|max:50',
        'inputDinner' => 'required|max:50',
        'inputAlhambra' => 'required|max:50',
        'dietaryReq' => 'required|max:50',
        'payment' => 'required|max:50|boolean',
        'waitingList' => 'required|max:50|boolean',
    ]);

    $registro = g_a_t_k_s::findOrFail($email);
    $registro->$request->input("fullName");
    $registro->$request->input("commandLine");
    $registro->$request->input("GATKfamiliar");
    $registro->$request->input("analyzeData");
    $registro->$request->input("researchInterests");
    $registro->$request->input("institution");
    $registro->$request->input("email");
    $registro->$request->input("position");
    $registro->$request->input("inputDinner");
    $registro->$request->input("inputAlhambra");
    $registro->$request->input("dietaryReq");
    $registro->$request->input("payment");
    $registro->$request->input("waitingList");
    return $registro->with('success', $email . ' ha sido actualizado.');
});

// eliminar registro
Route::delete('g_a_t_k_s/{email}', function ($email) {
    $registro = g_a_t_k_s::findOrFail($email);
    $registro->delete();
    return "Eliminado " . $email;
});
