<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $recipient = env('CONTACT_EMAIL', 'info@timmedia.com.ng');

        Mail::to($recipient)->send(new ContactMail($validated));

        return redirect()->route('contact.success');
    }

    public function success()
    {
        return view('contact.success');
    }
}
