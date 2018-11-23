<?php

namespace App\Http\Middleware;

use Closure;

class Role
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
        $roles=$this->CekRoute($route());

        if($request->user()->hasRole($roles) || !$roles ){

        
            return $next($request);
        }
        return abort(503,'Anda tidak punya akses');
    }
    private function CekRoute($route){
        $actions =$route->getAction();
        return isset($actions['roles']) ? $actions['roles']:null;
    }
}
