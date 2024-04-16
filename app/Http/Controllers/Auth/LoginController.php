<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     /**
     * Mostrar formulario de Inicio de sesion
     *
     * @return \Illuminate\View\View
     */

    public function showLoginForm()
    {
        return view('login');
    }
    
}
