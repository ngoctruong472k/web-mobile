<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Request;

class User
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
        $user = DB::select('select * from User');
        $name = $request->input('user');
        $pass = $request->input('pass');
        foreach($user as $value) {
            if($name == $value->user_id && $pass == $value->password){
                Request::session()->put('user', $value->user_id);
                return $next($request);
            }
        }
        return redirect('/login');
    }
}
