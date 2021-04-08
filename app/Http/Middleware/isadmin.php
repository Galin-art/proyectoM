<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isadmin
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
//        return $next($request);
//
//        if (Auth::user()->area_id == 200) {
//            return $next ($request);
//        } else {
//            return redirect('/user');
//        }

        switch (Auth::user()->area_id){
            case ('200'):
//                return redirect('/dasboard');
                return $next ($request);
                break;
            case('20001'):
                return redirect('/administracion');
                break;
            case ('20002'):
                return redirect('/difucion');
                break;
            case ('20003'):
                return redirect('/financieros');
                break;
            case ('20004'):
                return redirect('/juridico');
                break;

        }



    }

}
