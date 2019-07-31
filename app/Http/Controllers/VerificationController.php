<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait VerifiesEmails
{
    use RedirectsUsers;

    /**
     * Show the email verification notice.
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
        ? redirect($this->redirectPath())
        : view('auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     */
    public function verify(Request $request)
    {
        if ($request->route('id') == $request->user()->getKey()) {
            $request->user()->markEmailAsVerified();
        }

        return redirect($this->redirectPath());
    }

    /**
     * Resend the email verification notification.
     */
    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}
