<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Registrar nuevo usuario
     *
     * @bodyParam name string required Nombre del usuario. Example: Juan Perez
     * @bodyParam email string required Email único del usuario. Example: juan@example.com
     * @bodyParam password string required Contraseña (mínimo 8 caracteres). Example: password123
     * @bodyParam password_confirmation string required Confirmación de contraseña. Example: password123
     * @response 201 {
     *   "user": {
     *     "id": 1,
     *     "name": "Juan Perez",
     *     "email": "juan@example.com"
     *   },
     *   "token": "jwt_token"
     * }
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Log::channel('acciones')->info('Nuevo usuario registrado', [
            'user_id' => $user->id,
            'email' => $user->email,
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'), 201);
    }

    /**
     * Iniciar sesión
     *
     * @bodyParam email string required Email del usuario. Example: juan@example.com
     * @bodyParam password string required Contraseña del usuario. Example: password123
     * @response 200 {
     *   "token": "jwt_token"
     * }
     * @response 401 {
     *   "error": "Credenciales inválidas"
     * }
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = JWTAuth::attempt($credentials)) {
            Log::channel('acciones')->warning('Intento de sesión fallido', [
                'email' => $credentials['email'],
            ]);
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        Log::channel('acciones')->info('Usuario logueado', [
            'email' => $credentials['email'],
        ]);

        return response()->json(compact('token'));
    }

    /**
     * Obtener usuario autenticado
     * 
     * @authenticated
     *
     * @response 200 {
     *   "id": 1,
     *   "name": "Juan Perez",
     *   "email": "juan@example.com"
     * }
     */
    public function me(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Cerrar sesión
     * 
     * @authenticated
     *
     * @response 200 {
     *   "message": "Sessión cerrada correctamente"
     * }
     */
    public function logout(Request $request)
    {
        
        Log::channel('acciones')->info('Usuario cerró sessión', [
            'user_id' => auth()->id(),
        ]);

        auth()->logout();

        return response()->json(['message' => 'Sessión cerrada correctamente'], 200);
    }
}
