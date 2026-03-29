<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $ip = $request->ip();
        $cacheKey = 'contact_form_' . $ip;
        if (cache()->has($cacheKey)) {
            return Redirect::back()->withErrors(['We\'ve already received your message. Please try again later.'])->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Set throttle for 24 hours
        cache()->put($cacheKey, true, now()->addDay());

        // Log the message
        Log::info('Contact form submitted', $validated);

        // Send email to business
        \Mail::to('spicnspansuffolk@gmail.com')->send(new \App\Mail\ContactFormMail($validated));

        return Redirect::back()->with('success', 'Thank you for contacting us!');
    }
}
