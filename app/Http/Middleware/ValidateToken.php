<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class ValidateToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        /*if (empty($token)) {
            return redirect('/login');
        }*/

        if (empty($token)) {
            // Si la ruta actual es login o register, permitir la ejecución normal
            if ($request->is('login') || $request->is('register')) {
                return $next($request);
            } else {
                return redirect()->route('login');
            }
        }

        $user = User::fromToken($token);

        if (empty($user)) {
            return response()->json([
                'message' => 'Unauthorized',
                'data' => json_decode('{}'),
                'status' => 401
            ], 401);
        }

        $request->attributes->set('user', $user);
        return $next($request);
    }
}
