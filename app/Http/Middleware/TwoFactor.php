<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TwoFactor
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

        $user = auth()->user();
        if(Auth::check()){
        if($user->two_factor_confirmation == 'true')
        {
        if(auth()->check() && $user->two_factor_code)
        {
            if($user->two_factor_expires_at->lt(now()))
            {
                $user->resetTwoFactorCode();
                auth()->logout();

                return redirect()->route('login')->withMessage('Dvigubos autentifikacijos kodo galiojimo laikas baigėsi. Prašome prisijungti iš naujo.');
            }

            if(!$request->is('verify*'))
            {
                return redirect()->route('verify.index');
            }
        }
        }

        return $next($request);
        }
        else {
            return abort(404);
        }
    }

}
