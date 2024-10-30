<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = [
            'username' => $request->user()->username,
            'password' => $request->input('kata_sandi'),
        ];

        // Attempt to confirm the user's password using the provided credentials.
        if (! Auth::guard('web')->attempt($credentials)) {
            // If validation fails, throw an exception with an error message.
            throw ValidationException::withMessages([
                'kata_sandi' => __('auth.password'),
            ]);
        }

        // Store the password confirmation timestamp in the session.
        $request->session()->put('auth.password_confirmed_at', time());

        // Redirect to the intended page (usually the dashboard) after successful confirmation.
        return redirect()->intended(route('dashboard'));
    }
}
