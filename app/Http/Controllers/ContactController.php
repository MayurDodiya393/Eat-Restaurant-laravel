<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetail;

class ContactController extends Controller
{
    /**
     * Show contact page
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Save to database
        ContactDetail::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}
