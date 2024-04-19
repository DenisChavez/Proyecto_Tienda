<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function registro(Request $request){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->rol=$request->get('contacto');
        $user->password=Hash::make($request->password); //Cifrar la contraseña con la clase Hash
        $user->save();
        // Auth::login($user); Inicia sesion automaticamente
        return view('Login.login');
    }
    
    public function login(Request $request){
        $credenciales = [
            "email" => $request->email,
            "password" => $request->password
        ];
    
        if(Auth::attempt($credenciales)){
            $usuario = Auth::user();
    
            if ($usuario->rol == 'Cliente') {
                return view('Cliente.index');
            } elseif ($usuario->rol == 'Empleado') {
                return view('Empleado.index');
            } else {
                return view('Login.login')->with('error', 'Rol de usuario no válido.');
            }
        } else {
            return view('Login.login')->with('error', 'Credenciales inválidas');
        }               
    }
    
    

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
