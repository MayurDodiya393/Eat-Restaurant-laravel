<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Gallery page
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Feedback page
Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact form submit
Route::post('/contact/send', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    // Save to database
    App\Models\ContactDetail::create($validated);

    return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
})->name('contact.send');

// Login page
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('login');
})->name('login')->middleware('guest');

// Login form submit
Route::post('/login', function (Illuminate\Http\Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'Welcome back, ' . Auth::user()->name . '!');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
})->name('login.post');

// Register page
Route::get('/register', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('register');
})->name('register')->middleware('guest');

// Register form submit
Route::post('/register', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = App\Models\User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect()->route('dashboard')->with('success', 'Registration successful! Welcome, ' . $user->name . '!');
})->name('register.post');

// Logout
Route::post('/logout', function (Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home')->with('success', 'You have been logged out successfully!');
})->name('logout')->middleware('auth');

// Dashboard (protected route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// View all contact messages (for admin)
Route::get('/admin/contact-messages', function () {
    $messages = App\Models\ContactDetail::latest()->paginate(10);
    return view('admin.contact-messages', ['messages' => $messages]);
})->name('admin.contact-messages');
