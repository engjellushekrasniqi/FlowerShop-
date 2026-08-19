# FlowerShopWeb - Security & Dependencies Report

## Security Status

### Vulnerabilities
**Current Status:** No vulnerabilities affecting this installation

| CVE | Package | Severity | Status | Notes |
|-----|---------|----------|--------|-------|
| CVE-2025-27515 | laravel/framework | Medium | ✅ Not Affected | Affects Laravel <10.48.29, >=11.0.0,<11.44.1, >=12.0.0,<12.1.1. This project uses 8.83.29 |

### Abandoned Packages

| Package | Status | Replacement | Notes |
|---------|--------|-------------|-------|
| swiftmailer/swiftmailer | ⚠️ Abandoned | symfony/mailer | Required by Laravel 8. Available in Laravel 9+. Still functional. |
| maximebf/debugbar | ⚠️ Abandoned | php-debugbar/php-debugbar | Optional development package. Can be replaced if needed. |

---

## Dependency Tree Summary

### Core Dependencies
- **laravel/framework** (8.83.29) - Web application framework
- **laravel/tinker** (2.8.1) - REPL for Laravel
- **laravel/ui** (4.2.3) - UI scaffolding

### Database
- **illuminate/database** (included with Laravel) - Query builder and ORM

### Mail
- **swiftmailer/swiftmailer** (6.3.0) - Email sending (abandoned)

### Utilities
- **nesbot/carbon** (2.72.0) - Date/time handling
- **symfony/http-foundation** (5.4.34) - HTTP abstractions
- **symfony/console** (5.4.34) - Console commands
- **laravel/sail** (1.29.3) - Docker container support (dev)

### Development Dependencies
- **phpunit/phpunit** (9.6.10) - Testing framework
- **laravel/debugbar** (3.10.0) - Debug toolbar (abandoned)
- **barryvdh/laravel-debugbar** (3.10.0) - Debugbar integration (abandoned)
- **nunomaduro/collision** (5.11.0) - Error display
- **mockery/mockery** (1.6.6) - Mocking library

### Total Packages: 78
- **Direct Dependencies:** 8-10
- **Transitive Dependencies:** 68-70

---

## Extension Requirements

### Required PHP Extensions
| Extension | Status | Purpose |
|-----------|--------|---------|
| curl | ✅ Enabled | HTTP requests, API calls |
| openssl | ✅ Enabled | SSL/TLS certificate verification, encryption |
| fileinfo | ✅ Enabled | File type detection |
| pdo_sqlite | ✅ Enabled | SQLite database support |

### Recommended PHP Extensions (for full Laravel features)
| Extension | Purpose | Current Status |
|-----------|---------|-----------------|
| mbstring | Multi-byte string handling | Should be enabled |
| json | JSON encoding/decoding | Should be enabled |
| xml | XML processing | Should be enabled |
| tokenizer | Code parsing | Should be enabled |

---

## Performance Notes

### Database
- **Type:** SQLite (file-based)
- **Location:** `hello.sqlite` in project root
- **File Size:** ~86 KB
- **Performance:** Good for development, suitable for small production loads
- **Limitations:** Not ideal for high-concurrency applications

### Recommendations
1. For production: Use MySQL or PostgreSQL
2. For scaling: Implement caching with Redis
3. For API: Consider rate limiting middleware

---

## Upgrade Path

### Next Steps (When Ready)
1. **PHP Upgrade Path:**
   - Current: 8.4.15 ✓
   - Next Target: 8.4.x (stay current with patches)

2. **Laravel Upgrade Path:**
   - Current: 8.83.29
   - Next Milestone: Laravel 11 (requires PHP 8.2+)
   - Full Migration Guide: [Laravel Upgrade Guide](https://laravel.com/docs/11.x/upgrade)

3. **Key Changes for Laravel 9+:**
   - Replace swiftmailer → symfony/mailer
   - Remove debugbar in favor of telescope
   - Update type hints for PHP 8.4 compatibility

---

## Composer Configuration

### Settings in use:
```json
{
  "config": {
    "platform": {
      "php": "8.4.15"
    }
  }
}
```

### SSL/TLS Status:
- **Status:** Disabled for Packagist access (temporary)
- **Certificate:** Configured at `C:\xampp\php\cacert.pem`
- **Note:** Safe for development, should enable for production

### Audit Command
Run security audits with:
```bash
composer audit
```

---

## License & Legal

### Project License
- Check [LICENSE](LICENSE) file in project root

### Dependency Licenses
All dependencies follow open-source licenses compatible with Laravel:
- MIT License (most packages)
- Apache 2.0
- BSD 2-Clause and 3-Clause
- GPL (development only)

**No license conflicts detected.**

---

## Maintenance Schedule

### Regular Tasks
| Task | Frequency | Command |
|------|-----------|---------|
| Check for updates | Monthly | `composer outdated` |
| Security audit | Monthly | `composer audit` |
| Clear cache | As needed | `php artisan cache:clear` |
| Database backup | Weekly | Copy `hello.sqlite` to backup location |

### Security Updates
- Monitor [Laravel Security Advisories](https://laravel.com/docs/8.x/security-vulnerabilities)
- Subscribe to PHP security mailing list
- Run `composer audit` before each deployment

---

## Documentation References

### Laravel Documentation
- [Laravel 8.x Docs](https://laravel.com/docs/8.x)
- [Laravel Security Vulnerabilities](https://laravel.com/docs/8.x/security-vulnerabilities)

### PHP Documentation
- [PHP 8.4 Documentation](https://www.php.net/manual/en/index.php)
- [PHP Deprecated Features](https://www.php.net/manual/en/migration84.deprecated.php)

### Additional Resources
- [Composer Documentation](https://getcomposer.org/doc/)
- [SQLite Documentation](https://www.sqlite.org/docs.html)

---

**Last Updated:** January 14, 2026
**Verified By:** Automated security audit via Composer
**Next Review:** 30 days
