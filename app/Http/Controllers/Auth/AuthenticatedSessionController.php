<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }


    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return back()->withErrors(['email' => 'Invalid user credentials'])->onlyInput('email');
            }

            // This stores the JWT token in an HTTP-only cookie
            $cookie = cookie('token', $token, auth()->factory()->getTTL() * 60, null, null, false, true);

            // This redirects to the intended dashboard with the JWT token set in the cookie
            return redirect()->intended('dashboard')->withCookie($cookie);

        } catch (JWTException $e) {
            return back()->withErrors(['email' => 'Could not create token'])->onlyInput('email');
        }
    }

    // This is the method to logout authenticated users.
    public function destroy(Request $request)
    {
        try {
            //This invalidates the token
            JWTAuth::invalidate(JWTAuth::getToken());

            //This removes the token from cookie storage
            $cookie = cookie()->forget('token');

            return redirect('/login')->withCookie($cookie);

        } catch (JWTException $e) {
            return back()->withErrors(['error' => 'Error logging out user, please try again.']);
        }
    }

}
