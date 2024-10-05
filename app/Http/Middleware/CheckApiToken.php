<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization') ?? $request->query('token');

        if ($token !== 'Bearer ' . env('API_SECRET_TOKEN')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
