# Controller Architecture Guide

## 📋 Overview

The application has been refactored to use a proper MVC (Model-View-Controller) architecture. All requests now go through controllers instead of being handled directly in routes.

## 🏗️ Controller Structure

### 1. PageController
**File:** `app/Http/Controllers/PageController.php`

Handles all static page rendering.

**Methods:**
- `home()` - GET `/` → Shows home page
- `about()` - GET `/about` → Shows about page  
- `services()` - GET `/services` → Shows services page
- `gallery()` - GET `/gallery` → Shows gallery page
- `feedback()` - GET `/feedback` → Shows feedback page

**Example:**
```php
public function home()
{
    return view('home');
}
```

---

### 2. AuthController
**File:** `app/Http/Controllers/AuthController.php`

Handles all authentication operations (login, register, logout).

**Methods:**
- `showLogin()` - GET `/login` → Show login form
- `login()` - POST `/login` → Process login
- `showRegister()` - GET `/register` → Show register form
- `register()` - POST `/register` → Process registration
- `logout()` - POST `/logout` → Process logout

**Example:**
```php
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'Welcome back!');
    }

    return back()->withErrors(['email' => 'Credentials do not match.'])->onlyInput('email');
}
```

---

### 3. ContactController
**File:** `app/Http/Controllers/ContactController.php`

Handles contact form operations.

**Methods:**
- `show()` - GET `/contact` → Show contact form
- `send()` - POST `/contact/send` → Process contact submission

**Example:**
```php
public function send(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    ContactDetail::create($validated);

    return redirect()->back()->with('success', 'Message sent!');
}
```

---

### 4. DashboardController
**File:** `app/Http/Controllers/DashboardController.php`

Handles user dashboard (protected route).

**Methods:**
- `index()` - GET `/dashboard` → Show user dashboard

**Example:**
```php
public function index()
{
    return view('dashboard');
}
```

---

### 5. AdminController
**File:** `app/Http/Controllers/AdminController.php`

Handles admin panel operations.

**Methods:**
- `contactMessages()` - GET `/admin/contact-messages` → Show all contact messages

**Example:**
```php
public function contactMessages()
{
    $messages = ContactDetail::latest()->paginate(10);
    return view('admin.contact-messages', ['messages' => $messages]);
}
```

---

## 🔀 Route Configuration

**File:** `routes/web.php`

Routes are now organized into logical groups and use controllers.

### Route Groups

**1. Page Routes** (Public)
```php
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
```

**2. Contact Routes** (Public)
```php
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
```

**3. Auth Routes** (Guest Only - Not logged in)
```php
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});
```

**4. Protected Routes** (Auth Required - Logged in)
```php
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/contact-messages', [AdminController::class, 'contactMessages'])->name('admin.contact-messages');
});
```

---

## 📊 Complete Route Map

| HTTP | URL | Controller | Method | Auth | Name |
|------|-----|-----------|--------|------|------|
| GET | `/` | PageController | home | No | home |
| GET | `/about` | PageController | about | No | about |
| GET | `/services` | PageController | services | No | services |
| GET | `/gallery` | PageController | gallery | No | gallery |
| GET | `/feedback` | PageController | feedback | No | feedback |
| GET | `/contact` | ContactController | show | No | contact |
| POST | `/contact/send` | ContactController | send | No | contact.send |
| GET | `/login` | AuthController | showLogin | Guest | login |
| POST | `/login` | AuthController | login | Guest | login.post |
| GET | `/register` | AuthController | showRegister | Guest | register |
| POST | `/register` | AuthController | register | Guest | register.post |
| GET | `/dashboard` | DashboardController | index | Yes | dashboard |
| POST | `/logout` | AuthController | logout | Yes | logout |
| GET | `/admin/contact-messages` | AdminController | contactMessages | Yes | admin.contact-messages |

---

## 🎯 How It Works

### Request Flow

1. **User visits URL** (e.g., `/about`)
2. **Routes matches** (checks `routes/web.php`)
3. **Controller called** (e.g., `PageController@about`)
4. **Method executes** (performs logic)
5. **View returned** (renders template)
6. **HTML sent to browser** (user sees page)

### Example: Homepage

```
User visits: http://localhost:8000/
    ↓
Route matches: GET / [PageController::class, 'home']
    ↓
PageController->home() called
    ↓
return view('home');
    ↓
resources/views/home.blade.php rendered
    ↓
HTML sent to browser
```

### Example: Login Form Submission

```
User submits: POST /login
    ↓
Route matches: POST /login [AuthController::class, 'login']
    ↓
AuthController->login($request) called
    ↓
Validate email & password
    ↓
Auth::attempt($credentials)
    ↓
If success: Redirect to dashboard with success message
If fail: Redirect back with error message
    ↓
User sees result
```

---

## ✅ Advantages of This Architecture

### 1. **Separation of Concerns**
- Routes define paths
- Controllers handle logic
- Views display data

### 2. **Reusability**
- Controller methods can be reused
- Common logic extracted

### 3. **Maintainability**
- Easy to find and update code
- Clear structure

### 4. **Testability**
- Controllers can be unit tested
- Logic isolated from routes

### 5. **Scalability**
- Easy to add new features
- Professional structure
- Enterprise-ready

### 6. **Code Organization**
- Single responsibility
- DRY (Don't Repeat Yourself)
- Clean code principles

---

## 📝 Adding New Features

### Example: Add Newsletter Signup

**1. Create controller:**
```bash
php artisan make:controller NewsletterController
```

**2. Add methods:**
```php
public function show() {
    return view('newsletter');
}

public function subscribe(Request $request) {
    // Validation and logic
}
```

**3. Add routes:**
```php
Route::get('/newsletter', [NewsletterController::class, 'show'])->name('newsletter');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
```

**4. Create view:** `resources/views/newsletter.blade.php`

---

## 🔒 Middleware Protection

### Guest Middleware
Prevents logged-in users from accessing login/register:
```php
Route::middleware('guest')->group(function () {
    // Only accessible when NOT logged in
});
```

### Auth Middleware
Prevents non-logged-in users from accessing dashboard:
```php
Route::middleware('auth')->group(function () {
    // Only accessible when logged in
});
```

---

## 📚 Controller Responsibilities

| Controller | Responsibility |
|-----------|-----------------|
| PageController | Render static pages |
| AuthController | Manage authentication |
| ContactController | Handle contact form |
| DashboardController | Show user dashboard |
| AdminController | Manage admin panel |

---

## 🚀 Best Practices

✅ **DO:**
- Keep controllers focused (single responsibility)
- Use meaningful method names
- Validate input in controller
- Redirect to named routes
- Use dependency injection

❌ **DON'T:**
- Put business logic in routes
- Handle multiple concerns in one controller
- Direct database queries in controller
- Use magic strings for route names

---

## 📖 Generate Routes List

To see all routes:
```bash
php artisan route:list
```

Output shows:
- HTTP method
- Route path
- Controller@method
- Middleware
- Route name

---

## 🔧 Common Tasks

### Change Login Redirect
In `AuthController@login()`:
```php
return redirect()->route('dashboard'); // Change 'dashboard' to desired route
```

### Add New Static Page
1. Create method in `PageController`
2. Add route in `web.php`
3. Create view file

### Add New Admin Feature
1. Add method in `AdminController`
2. Add protected route
3. Create admin view

---

## ✨ Summary

- **5 Controllers** manage all functionality
- **Clean routes file** with organized groups
- **Professional structure** following Laravel conventions
- **Easy to maintain** and extend
- **Better code organization** than route closures
- **Ready for team development** and scaling

All pages now route through controllers for better code organization and maintainability!

---

**Last Updated:** December 19, 2025
**Status:** ✅ Complete and Professional
