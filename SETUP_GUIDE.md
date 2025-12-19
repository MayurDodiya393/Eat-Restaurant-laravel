# Eat Restaurant - Laravel Project Setup Guide

This is a Laravel-based restaurant website with all HTML, CSS, and JavaScript files properly integrated into the Laravel framework.

## Project Structure

### Assets (Located in `/public/`)
- **CSS Files** (in `/public/css/`)
  - `bootstrap.css` - Bootstrap framework
  - `font-awesome.css` - Font Awesome icons
  - `animate.css` - CSS animations
  - `styles.css` - Main stylesheet
  - `theme.css` - Theme styling

- **JavaScript Files** (in `/public/js/`)
  - `jquery.js` - jQuery library
  - `bootstrap.js` - Bootstrap JavaScript
  - Various plugins for functionality (masonry, gallery, parallax, etc.)

- **Images** (in `/public/img/`)
  - Logo, slides, gallery images
  - Default user avatar
  - Background patterns

- **Fonts** (in `/public/fonts/`)
  - FontAwesome icon fonts

### Views (Located in `/resources/views/`)
- `layouts/app.blade.php` - Master layout template
- `home.blade.php` - Homepage
- `about.blade.php` - About page
- `services.blade.php` - Services page
- `gallery.blade.php` - Gallery page
- `contact.blade.php` - Contact page
- `feedback.blade.php` - Feedback/testimonials page
- `login.blade.php` - Login page
- `register.blade.php` - Registration page

### Routes (in `/routes/web.php`)
All pages are mapped with named routes:
- `/` - Home (name: 'home')
- `/about` - About (name: 'about')
- `/services` - Services (name: 'services')
- `/gallery` - Gallery (name: 'gallery')
- `/feedback` - Feedback (name: 'feedback')
- `/contact` - Contact (name: 'contact')
- `/login` - Login (name: 'login')
- `/register` - Register (name: 'register')

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL/MariaDB (for database functionality)
- Apache/Nginx with mod_rewrite enabled

### Steps to Run

1. **Navigate to project directory:**
   ```bash
   cd c:\xampp\htdocs\Eat-Restaurant-laravel
   ```

2. **Install dependencies (if not already done):**
   ```bash
   composer install
   ```

3. **Copy environment file:**
   ```bash
   copy .env.example .env
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Configure database (optional for now):**
   - Edit `.env` file with your database credentials
   - Run migrations: `php artisan migrate`

6. **Start development server:**
   ```bash
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`

   Or if using XAMPP:
   - Ensure Apache is running
   - Access at `http://localhost/Eat-Restaurant-laravel/`

## Using Asset Files

All CSS, JS, and image files use Laravel's `asset()` helper function in the templates:
```blade
{{ asset('css/bootstrap.css') }}
{{ asset('js/jquery.js') }}
{{ asset('img/logo.png') }}
```

This ensures proper URL generation regardless of your deployment environment.

## Form Handling

The contact, login, and register forms are set up with:
- CSRF token protection (`@csrf`)
- Form validation with error display
- Named routes for form submission
- Success message feedback

### Contact Form
- Route: `POST /contact/send` (name: 'contact.send')
- Fields: name, email, message

### Login Form
- Route: `POST /login` (name: 'login.submit')
- Fields: email, password

### Register Form
- Route: `POST /register` (name: 'register.submit')
- Fields: name, email, password, password_confirmation

## Customization

### Adding Database Models
If you want to save contact messages or user registrations:
```bash
php artisan make:model ContactMessage -m
php artisan make:model User -m
```

### Updating Controller Logic
The form routes currently have inline closures. For better organization, create controllers:
```bash
php artisan make:controller PageController
php artisan make:controller ContactController
```

### Styling
- Main stylesheet: `/public/css/styles.css`
- Theme styling: `/public/css/theme.css`
- Modify these files or add new CSS files and link them in the layout

## Navigation

All navigation links use Laravel route helpers:
```blade
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
<!-- etc -->
```

This makes it easy to change URLs without updating every link.

## Support

For any issues or questions:
1. Check Laravel documentation: https://laravel.com/docs
2. Review the asset organization in `/public/`
3. Verify all routes are properly defined in `/routes/web.php`
4. Ensure all Blade templates are using proper syntax

## License

This project is created for the Eat Restaurant website.
