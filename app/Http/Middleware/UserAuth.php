<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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

        if(!auth("web")->check()){
            $request->session()->put('url.intended', url($request->path()));
            return redirect()->route("site.showLogin");
        }

        return $next($request);
    }
}
