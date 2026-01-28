<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        // Kiểm tra tuổi từ session
        $age = session('age');

        // Nếu không có dữ liệu tuổi hoặc tuổi < 18 thì từ chối truy cập
        if (!$age || $age < 18) {
            return response('không được phép truy cập', 403);
        }

        return $next($request);
    }
}
