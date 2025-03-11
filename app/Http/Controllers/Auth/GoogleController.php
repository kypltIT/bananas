<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Kiểm tra xem user đã tồn tại chưa
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Nếu chưa có, tạo mới user
            $user = User::create([
                'first_name' => $googleUser->user['given_name'] ?? '',
                'last_name' => $googleUser->user['family_name'] ?? '',
                'email' => $googleUser->getEmail(),
                'remember_token' => $googleUser->token,
                'role_id' => 2, // Mặc định user
                'address' => 'N/A',
                'age' => 0,
                'profile_picture' => $googleUser->getAvatar(),
            ]);
        }

        Auth::login($user);
        return redirect()->route('/'); // Điều hướng đến trang chính
    }
}
