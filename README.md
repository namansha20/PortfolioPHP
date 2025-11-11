# PortfolioPHP

A simple PHP-based portfolio website with minimal code and no CSS styling.

## Features

- **Home Page** - Welcome page with About Me section and skills list
- **Certifications** - Display professional certifications
- **Achievements** - Showcase notable achievements
- **Contact** - Contact form with submission handling
- **Resume Download** - Download resume file with preview

## Pages

1. `index.php` - Home page
2. `certifications.php` - Certifications listing
3. `achievements.php` - Achievements showcase
4. `contact.php` - Contact form
5. `download_resume.php` - Resume download and preview
6. `resume.txt` - Resume file

## How to Run

### Using PHP Built-in Server

```bash
php -S localhost:8000
```

Then open your browser and navigate to `http://localhost:8000`

### Using Apache/Nginx

Simply copy all files to your web server document root.

## Requirements

- PHP 5.4 or higher

## Security Features

- User input sanitization with `htmlspecialchars()` in contact form
- Fixed file path for resume download (no path traversal vulnerability)
- Required form fields validation

## Customization

You can customize the content by editing:
- Personal information in each PHP file
- Resume content in `resume.txt`
- Contact information in `contact.php`