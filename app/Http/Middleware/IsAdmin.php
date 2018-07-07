<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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

//        若使用者尚未登入的話，認證篩選器會使用  Redirect::intended 方法重導使用者至指定的 URL



        //得到已經認證的用戶

        $user = Auth::user();
        if($user != null){
            if($user->isAdmin()){

                //return $next($request);
                return $next($request);
            }
        }


        // 回到首頁
        return redirect()->route('index');
    }





}
