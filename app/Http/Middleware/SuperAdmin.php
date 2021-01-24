<?php

namespace App\Http\Middleware;

use Closure;
use App\user;
use Auth;

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
        $user = Auth::user();
        if ($user->role == 'superadmin') {
            return $next($request);
        } else{
            abort(403, 'Unauthorized action.');
        }
        
    }
}
