<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        // Nếu không đúng role, điều hướng về trang phù hợp
        if ($user->role_id !== $role) {
            if ($user->role_id === '0866108f-fd05-11ef-ba53-5811223a0998') {
                return redirect('/'); // Nếu là user, đưa về trang chủ
            } elseif ($user->role_id === '0865fe87-fd05-11ef-ba53-5811223a0998') {
                return redirect('/admin/dashboard'); // Nếu là admin, đưa về admin dashboard
            }
        }

        return $next($request);
    }
}
