<?php

namespace App\Http\Controllers\Auth;

use App\Helper\AlertHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): string
    {

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
//            // Untuk regenerasi sesi login user
//            $request->session()->regenerate();

            $redirectURL = route('front.index');
            $alert = AlertHelper::success('Berhasil Login', 'Selamat Datang');
            return "
                '$alert'
                <script>
                    setTimeout(function () {
                        location.href = '$redirectURL';
                    }, 1500);
                </script>";

        }
        return AlertHelper::error('Gagal Login', 'Email atau Password Salah');
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
