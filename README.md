# 🍽️ Eat Restaurant - Laravel Web Application

A modern, fully-featured restaurant website built with Laravel 11, featuring user authentication, contact management, and an admin dashboard.

## ✨ Features

- 🔐 **User Authentication System** - Register, login, and manage your account
- 👤 **User Dashboard** - View your profile and manage account settings
- 📧 **Contact Form** - Submit messages which are stored in the database
- 📋 **Admin Panel** - View and manage all contact submissions
- 🍴 **Service Showcase** - Display restaurant services
- 🖼️ **Gallery** - Photo gallery of restaurant and food
- 💬 **Feedback System** - Customers can leave feedback
- 📱 **Responsive Design** - Works on desktop, tablet, and mobile
- 🔒 **Secure** - Password hashing, CSRF protection, session management

## 📋 Requirements

- PHP 8.2 or higher
- Composer
- MySQL 5.7+
- XAMPP (or Apache + MySQL)
- Node.js (optional, for frontend tools)

## 🚀 Quick Setup

### Option 1: Automatic Setup (Recommended)

1. **Navigate to project directory:**
   ```bash
   cd c:\xampp\htdocs\Eat-Restaurant-laravel
   ```

2. **Run the automatic setup command:**
   ```bash
   php artisan setup:project
   ```
   This will automatically:
   - Create all database tables
   - Set up the database connection
   - Display next steps

3. **Start the development server:**
   ```bash
   php artisan serve
   ```

4. **Open in browser:**
   ```
   http://localhost:8000
   ```

### Option 2: Manual Setup

1. **Navigate to project directory:**
   ```bash
   cd c:\xampp\htdocs\Eat-Restaurant-laravel
   ```

2. **Install dependencies (if not already installed):**
   ```bash
   composer install
   ```

3. **Configure environment file:**
   - Copy `.env.example` to `.env` (if needed)
   - Update database settings:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=Eat_restaurant_laravel
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Create database (if not exists):**
   ```bash
   php artisan db:create
   ```
   Or manually create using phpMyAdmin/MySQL CLI

6. **Run migrations to create tables:**
   ```bash
   php artisan migrate
   ```

7. **Start XAMPP:**
   - Open XAMPP Control Panel
   - Click "Start" for Apache
   - Click "Start" for MySQL

8. **Start Laravel development server:**
   ```bash
   php artisan serve
   ```

9. **Open in browser:**
   ```
   http://localhost:8000
   ```

## 📚 Available Routes

### Public Routes
- `GET /` - Home page
- `GET /about` - About Us
- `GET /services` - Our Services
- `GET /gallery` - Photo Gallery
- `GET /feedback` - Feedback
- `GET /contact` - Contact Form
- `GET /login` - Login Page
- `GET /register` - Registration Page
- `POST /login` - Submit Login
- `POST /register` - Submit Registration

### Protected Routes (Requires Login)
- `GET /dashboard` - User Dashboard
- `POST /logout` - Logout

### Admin Routes
- `GET /admin/contact-messages` - View all contact messages

## 🔑 User Authentication

### Create Account
1. Click "Register" in the navbar
2. Fill in your name, email, and password
3. Click "Register"
4. You'll be automatically logged in

### Login
1. Click "Login" in the navbar
2. Enter your email and password
3. Click "Login"

### Logout
1. Click "Logout (Your Name)" in the navbar
2. You'll be logged out and redirected to home

## 📊 Database Tables

### users
- Stores user account information
- Columns: id, name, email, password, created_at, updated_at

### contact_details
- Stores contact form submissions
- Columns: id, name, email, message, created_at, updated_at

### migrations
- Tracks database schema changes
- System table (auto-managed)

## 📁 Project Structure

```
Eat-Restaurant-laravel/
├── app/
│   ├── Console/Commands/
│   │   └── SetupProject.php      # Setup command
│   ├── Http/Controllers/
│   ├── Models/
│   │   ├── User.php              # User model
│   │   └── ContactDetail.php     # Contact message model
│   └── Providers/
├── database/
│   ├── migrations/               # Database migrations
│   ├── factories/                # Model factories
│   └── seeders/                  # Database seeders
├── routes/
│   └── web.php                   # Web routes
├── resources/
│   ├── views/                    # Blade templates
│   ├── css/                      # Stylesheets
│   └── js/                       # JavaScript files
├── public/
│   ├── css/                      # Public CSS
│   ├── js/                       # Public JavaScript
│   └── img/                      # Images and assets
├── storage/                      # Session and cache storage
├── .env                          # Environment configuration
├── README.md                     # This file
├── AUTH_SETUP.md                 # Authentication documentation
├── DATABASE_SETUP.md             # Database documentation
└── composer.json                 # PHP dependencies
```

## 🔒 Security

The application includes several security features:

- **Password Hashing** - All passwords are hashed using bcrypt
- **CSRF Protection** - All forms include CSRF tokens
- **Session Management** - Secure session handling with token regeneration
- **Input Validation** - All user inputs are validated
- **Email Uniqueness** - Prevents duplicate email registration
- **Middleware Protection** - Routes protected with authentication middleware

## 🐛 Troubleshooting

### Issue: "Connection refused" error
**Solution:** Make sure XAMPP is running (Apache and MySQL started)

### Issue: Database connection error
**Solution:** 
- Verify MySQL is running in XAMPP
- Check `.env` file has correct database settings
- Create database: `php artisan db:create`

### Issue: "Column not found" error
**Solution:** Run migrations: `php artisan migrate`

### Issue: Can't access website at localhost:8000
**Solution:**
- Make sure Laravel server is running: `php artisan serve`
- Check port 8000 is not in use
- Try different port: `php artisan serve --port=8001`

### Issue: Login/Register not working
**Solution:**
- Clear browser cookies
- Run migrations: `php artisan migrate`
- Check `.env` database configuration

## 📖 Additional Documentation

- **[AUTH_SETUP.md](AUTH_SETUP.md)** - Complete authentication system guide
- **[DATABASE_SETUP.md](DATABASE_SETUP.md)** - Database configuration and structure
- **[SETUP_GUIDE.md](SETUP_GUIDE.md)** - Detailed project setup guide
- **[ARCHITECTURE.md](ARCHITECTURE.md)** - Project architecture overview

## 🛠️ Common Commands

```bash
# Setup project (automatic)
php artisan setup:project

# Start development server
php artisan serve

# Run database migrations
php artisan migrate

# Create database
php artisan db:create

# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Logout (in route form)
POST /logout
```

## 💻 Running the Project

### Step-by-Step

1. **Start XAMPP:**
   - Open XAMPP Control Panel
   - Click "Start" next to Apache
   - Click "Start" next to MySQL

2. **Open Terminal/Command Prompt**

3. **Navigate to project:**
   ```bash
   cd c:\xampp\htdocs\Eat-Restaurant-laravel
   ```

4. **Run setup (first time only):**
   ```bash
   php artisan setup:project
   ```

5. **Start Laravel server:**
   ```bash
   php artisan serve
   ```

6. **Open browser:**
   ```
   http://localhost:8000
   ```

## 🎯 Using the Application

### As a Customer
1. Visit the website
2. Click "Register" to create an account
3. View services and gallery
4. Submit contact form to send message
5. Access your dashboard to view profile
6. Leave feedback

### As an Admin
1. Login with your account
2. Visit `/admin/contact-messages`
3. View all customer messages
4. See pagination and message details
5. Click email links to reply

## 📞 Support

For issues or questions:
1. Check the documentation files (AUTH_SETUP.md, DATABASE_SETUP.md)
2. Verify your environment setup
3. Check browser console for errors
4. Ensure MySQL and Apache are running

## 📝 License

This project is built with Laravel, which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
