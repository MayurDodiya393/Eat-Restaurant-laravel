<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetail;

class AdminController extends Controller
{
    /**
     * Show all contact messages
     */
    public function contactMessages()
    {
        $messages = ContactDetail::latest()->paginate(10);
        return view('admin.contact-messages', ['messages' => $messages]);
    }
}
