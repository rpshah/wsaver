<?php

namespace App\Http\Middleware;

use Closure;

class FamilyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user == null || $user->type != 'FAMILY_ADMIN') {
            return redirect('home');
        }

        return $next($request);
    }
}
