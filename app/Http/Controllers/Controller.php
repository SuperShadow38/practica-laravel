<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


abstract class Controller
{
    public function store(Request $request)
{
    // Validar los datos recibidos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);

    // Crear un nuevo usuario con los datos del formulario
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    // Redireccionar al usuario a alguna página de éxito
    return redirect()->route('ruta.de.exito')->with('success', 'Usuario creado exitosamente.');
}
}
