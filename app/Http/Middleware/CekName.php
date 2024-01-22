<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$name)
    {
        if (in_array($request->user()->name,$name)) {
            return $next($request);
        }
        return redirect('home');
    }
}
