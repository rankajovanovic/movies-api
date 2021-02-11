<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTitleAndReleaseDate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Movie::where('title' )
        ->where('releaseDate' )
        ->exist())
        return $next($request);
    }
}
