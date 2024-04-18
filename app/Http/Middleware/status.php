<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class status
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
        $user = Auth::user()->customer_status;

        if ($user != '1'){
            flash("account gedeactiveerd");
            return redirect('/');
        }

        return $next($request);
    }
}
