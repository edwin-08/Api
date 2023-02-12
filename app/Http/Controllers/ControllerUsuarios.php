<?php

namespace App\Http\Controllers;

use App\Models\ModelUsuarios;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ControllerUsuarios extends Controller
{
    public function AutenticarLogin(Request $request)
    {
    }
    public function registrar_usuario_ruta(Request $request)
    {
        $validar = $request->validate([
            'name' => 'required|min:255',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required|min:10',
        ]);

        if ($validar) {
            $pwd = password_hash(($request->password), PASSWORD_DEFAULT);
            $data = ([
                'full_name' => $request->name,
                'last_name' => $request->lastname,
                'email' => $request->email,
                'password' => $pwd
            ]);
            if (ModelUsuarios::Registrar_nuevo_usuario($data)) {
                return response()->json(['status' => true], 200, ['Content-Type', 'application/json; charset=utf-8']);
            }
        }
    }
}
