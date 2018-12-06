<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
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
        if ($request->user()->hasRole('Super Admin') || $request->user()->hasRole('Admin')) {
            return $next($request);
        } else {
            return redirect()->home()->with([
                'error' => 'You\'re not authorized to perform that action.'
            ]);
        }
    }
}
