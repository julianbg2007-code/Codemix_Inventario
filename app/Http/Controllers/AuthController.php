<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
      
        if (! $token = auth('api')->attempt($request->validated())) {
            throw ValidationException::withMessages([
                'ERROR' => ['Credenciales inválidas.'],
            ],403);
        }

        return $this->respondWithToken($token);
    }

    public function me(): JsonResponse
    {
        $user = auth('api')->user()->load('rol');

        if(!$user)
         {
            return response()->json([
            'message' => 'Usuario no encontrado'
        ],403);
            }

        return response()->json([
            'user' => $user,
            'role' => $user->getRolName(),
            'permissions' => $user->getPermissions(),
        ],200);
    }

    public function logout(): JsonResponse
    {
        auth('api')->logout();

        return response()->json([
            'message' => 'Sesión cerrada correctamente.',
        ],200);
    }

    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken(string $token): JsonResponse
    {
        $user = auth('api')->user()->load('rol');

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => [
                'id' => $user->id_usuario,
                'name' => $user->nombre,
                'email' => $user->email,
                'role' => $user->getRolName(),
                'permissions' => $user->getPermissions(),
            ],
        ],200);
    }
}