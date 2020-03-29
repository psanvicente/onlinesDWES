<?php

namespace App\Http\Middleware;


use Closure;


class EsAdmin extends Middleware
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
        $user=Auth::user();
    if(!$user->esAdmin()){
        return redirect('/');
    }
        return $next($request);
    }
}

