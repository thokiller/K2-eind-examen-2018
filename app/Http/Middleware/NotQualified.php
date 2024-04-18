<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NotQualified
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

        $qualified = Auth::user()->qualified;

        if ($qualified != "1"){
            flash("plan eerst een rijvaardigheid check in.");
            return redirect('/qualification');
        }

        return $next($request);
    }
}
