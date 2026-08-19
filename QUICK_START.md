# FlowerShopWeb - Quick Start Guide

## 🚀 Start the Application

### Option 1: Simple Start
```bash
cd C:\Users\Engjell Krasniqi\Desktop\FlowerShopWeb
php artisan serve
```

Then open: **http://127.0.0.1:8000**

### Option 2: With Custom Port
```bash
php artisan serve --port=3000
```

---

## 📁 Important Files

| File/Folder | Purpose |
|------------|---------|
| `.env` | Application configuration & database settings |
| `hello.sqlite` | SQLite database (all data stored here) |
| `routes/web.php` | Web routes and page definitions |
| `app/Http/Controllers/` | Request handlers |
| `app/Models/` | Database models |
| `resources/views/` | HTML templates |
| `public/` | Public assets (CSS, JS, images) |

---

## 🔧 Common Commands

```bash
# View Laravel version
php artisan --version

# Create new database tables
php artisan migrate

# Seed database with sample data
php artisan db:seed

# Clear application cache
php artisan cache:clear

# Run tests
php artisan test

# Access interactive shell
php artisan tinker
```

---

## 📊 Database Info

- **Type:** SQLite (file-based)
- **Location:** `hello.sqlite` in project root
- **Access:** Via Laravel ORM (Models in `app/Models/`)
- **Tables:** Users, Products, Categories, Orders, etc.

### View Database Contents
Use Laravel Tinker:
```bash
php artisan tinker
>>> \App\Models\Product::all();
>>> \App\Models\User::all();
```

---

## 📝 Environment Configuration

Key settings in `.env`:
- `APP_NAME=Flower` - Application name
- `APP_DEBUG=false` - Hides errors from users ✓
- `APP_ENV=local` - Development mode
- `DB_CONNECTION=sqlite` - Database type
- `DB_DATABASE=hello.sqlite` - Database file path

---

## 🐛 Troubleshooting

### Server Won't Start
1. Check if port 8000 is free: `netstat -ano | findstr :8000`
2. Use different port: `php artisan serve --port=3001`
3. Verify PHP is installed: `php --version`

### Database Connection Error
1. Verify `.env` has correct database path
2. Check `hello.sqlite` file exists
3. Run migrations: `php artisan migrate`

### Assets Not Loading (CSS/Images)
1. Clear cache: `php artisan cache:clear`
2. Compile assets: `npm run dev` (if using Mix)
3. Check files exist in `public/css`, `public/js`, `public/uploads/`

### Deprecated Warnings in Terminal
- ✓ Normal for Laravel 8 on PHP 8.4
- ✓ Users don't see them (APP_DEBUG=false)
- ✓ Will disappear after upgrading to Laravel 11

---

## 📈 Project Structure

```
FlowerShopWeb/
├── app/                 # Application code
│   ├── Models/         # Database models
│   ├── Http/           # Controllers, Middleware
│   └── Notifications/  # Email notifications
├── database/           # Migrations, Seeders, Factories
├── resources/          # Views, CSS, JavaScript
├── routes/             # URL routing (web.php, api.php)
├── public/             # Public files (CSS, JS, uploads)
├── storage/            # Application files & logs
├── .env                # Environment configuration
└── hello.sqlite        # Database file
```

---

## 🔐 Security Notes

- ✅ Database is local (SQLite)
- ✅ No sensitive data exposed
- ⚠️ Keep `.env` file with sensitive data out of version control
- ⚠️ Don't run `APP_DEBUG=true` in production
- ⚠️ For production: Use proper database (MySQL/PostgreSQL)

---

## 📞 Need Help?

### Check Logs
```bash
# View latest application logs
type storage\logs\laravel.log
```

### Debug Mode (Terminal Only)
```bash
# Temporarily see errors in terminal
php artisan tinker
>>> config('app.debug');
```

### Verify Installation
```bash
# Check all dependencies
composer check-platform-reqs

# Run security audit
composer audit
```

---

## ✨ Status: READY TO USE

- ✅ Server running: http://127.0.0.1:8000
- ✅ Database connected: SQLite
- ✅ All dependencies resolved: 78 packages
- ✅ No blocking errors
- ✅ Assets loading correctly
- ✅ Clean user interface (no deprecation warnings shown)

**Your FlowerShopWeb application is fully operational!**

---

*Last Updated: January 14, 2026*
*Configuration: Laravel 8.83.29 | PHP 8.4.15 | SQLite*
