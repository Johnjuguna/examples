<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  //\Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);


        // Check if user is authenticated and has 'user' role
      ////  if (auth()->check() && auth()->user()->usertype === 'user') {
            // If user tries to access admin routes, deny access
           // if ($request->is('admin/*')) {
////abort(403, 'Access Denied');
          //  }
     //   }

        ///return $next($request);
    }
}
