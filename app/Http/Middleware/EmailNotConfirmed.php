<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EmailNotConfirmed
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
        $user = Auth::user()->email_confirmed;

        if ($user == "confirmed"){
            return redirect('/home');
        }

        return $next($request);
    }
}
