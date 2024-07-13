<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        // Example: Sending a confirmation email (configure mail settings in .env)
        Mail::raw('Thank you for requesting a quote. We will get back to you soon.', function ($message) use ($email) {
            $message->to($email)
                    ->subject('Quote Request Confirmation');
        });

        return response()->json(['message' => 'Quote request submitted successfully.'], 200);
    }
}
