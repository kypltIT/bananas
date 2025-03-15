<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem user có đăng nhập không
        if (Auth::check()) {
            $user = Auth::user();

            // Kiểm tra xem session của user có tồn tại trong database không
            $sessionExists = DB::table('sessions')
                ->where('user_id', $user->id)
                ->exists();

            if ($sessionExists) {
                // Nếu là admin, chuyển hướng về dashboard
                if ($user->role_id === '0865fe87-fd05-11ef-ba53-5811223a0998') {
                    return redirect('/admin/dashboard');
                }
                // Nếu là user, chuyển hướng về trang chính
                return redirect('/');
            }
        }

        return $next($request);
    }
}
