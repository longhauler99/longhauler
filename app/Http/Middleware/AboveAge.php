<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboveAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $age): Response
    {
        $loggedInUserAge = 12;

        if ($loggedInUserAge > $age)
        {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
