# Quick Setup Reference Guide

## 🚀 One-Command Setup (Recommended)

```bash
cd c:\xampp\htdocs\Eat-Restaurant-laravel
php artisan setup:project
php artisan serve
```

Then open: **http://localhost:8000**

## ⚙️ What the Setup Command Does

The `php artisan setup:project` command automatically:

1. ✅ Creates all database tables (users, contact_details, jobs, cache)
2. ✅ Sets up the database schema
3. ✅ Displays your database configuration
4. ✅ Shows next steps

## 📊 Database Tables Created

| Table | Purpose | Columns |
|-------|---------|---------|
| **users** | User accounts | id, name, email, password, created_at, updated_at |
| **contact_details** | Contact form submissions | id, name, email, message, created_at, updated_at |
| **cache** | System cache | key, value, expiration |
| **jobs** | Queue jobs | id, queue, payload, created_at |
| **migrations** | Migration tracking | id, migration, batch |

## 🔑 First User Creation

After setup, users can:
1. Click **"Register"** in navbar
2. Fill in name, email, password
3. Click **"Register"**
4. Automatically logged in to dashboard

## 📝 Available Commands

```bash
# Setup (First time only)
php artisan setup:project

# Start development server
php artisan serve

# Run migrations manually
php artisan migrate

# Create database
php artisan db:create

# Clear cache
php artisan cache:clear

# View all routes
php artisan route:list
```

## 🔗 Important URLs

| URL | Purpose | Auth Required? |
|-----|---------|-----------------|
| `/` | Home page | No |
| `/register` | Create account | No |
| `/login` | Login | No |
| `/dashboard` | User profile | **Yes** |
| `/contact` | Contact form | No |
| `/admin/contact-messages` | View messages | **Yes** |

## ✨ Features by User Type

### Visitor (Not Logged In)
- View home page
- Browse services and gallery
- Submit contact form
- Leave feedback
- Register or login

### Registered User (Logged In)
- Access dashboard with profile
- View name, email, member date
- Submit contact messages
- View services and gallery
- Logout

### Admin (Logged In)
- Same as registered user
- Plus: View all contact messages at `/admin/contact-messages`

## 🐛 Common Issues & Fixes

| Issue | Fix |
|-------|-----|
| Database error | Run: `php artisan migrate` |
| Port 8000 in use | Run: `php artisan serve --port=8001` |
| Can't login | Clear cookies, run migrations |
| Files not showing | Check `public/` folder permissions |
| Server won't start | Check Apache/MySQL in XAMPP |

## 📚 Documentation Files

- **README.md** - Full project guide
- **AUTH_SETUP.md** - Authentication details
- **DATABASE_SETUP.md** - Database configuration
- **SETUP_GUIDE.md** - Detailed setup steps
- **ARCHITECTURE.md** - Project structure

## 🎯 Daily Workflow

```bash
# 1. Start XAMPP (Apache + MySQL)

# 2. Open terminal
cd c:\xampp\htdocs\Eat-Restaurant-laravel

# 3. Start Laravel
php artisan serve

# 4. Visit in browser
http://localhost:8000

# 5. When done, press Ctrl+C to stop server
```

## 🔒 Security Notes

✓ Passwords are hashed (bcrypt)
✓ All forms have CSRF protection
✓ Sessions regenerate on login
✓ Email must be unique for registration
✓ Routes protected with middleware

## 📱 Responsive Design

The website works on:
- Desktop browsers
- Tablets
- Mobile phones
- All modern browsers (Chrome, Firefox, Safari, Edge)

## 🎨 Features

✓ User registration & login
✓ User dashboard
✓ Contact form with database storage
✓ Admin panel for messages
✓ Gallery
✓ Services showcase
✓ Feedback system
✓ Responsive design
✓ Secure authentication

## 📞 Need Help?

1. Check **README.md** for full documentation
2. Check **AUTH_SETUP.md** for login/register issues
3. Check **DATABASE_SETUP.md** for database issues
4. Ensure XAMPP services are running
5. Check browser console for errors (F12)

---

**Status**: ✅ Ready to use immediately after `php artisan setup:project`
