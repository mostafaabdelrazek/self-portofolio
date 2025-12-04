# Contact Form Setup

## Files
- `send-email.php` - PHP backend that handles email sending
- `index.html` - Contains the contact form in the footer section

## Configuration

### 1. Update Email Recipients
Edit `send-email.php` line 24:

```php
$to = 'info@ms-code.dev, mohamed.yasser11182@gmail.com, abdelrazekmostafa771@gmail.com';
```

Add or remove email addresses separated by commas.

### 2. Update Sender Email
Edit `send-email.php` lines 39-40:

```php
$headers = "From: noreply@ms-code.dev\r\n";
$headers .= "Reply-To: $email\r\n";
```

Change `noreply@ms-code.dev` to match your domain.

## How It Works

1. User enters their email in the footer form
2. JavaScript sends an AJAX POST request to `send-email.php`
3. PHP validates the email and sends it to your configured recipients
4. User receives success/error feedback

## Server Requirements

- PHP 5.4 or higher
- `mail()` function enabled on server
- Proper SMTP configuration on server

## Testing

1. Upload both `index.html` and `send-email.php` to your web server
2. Make sure they are in the same directory
3. Test by entering an email in the footer form

## Troubleshooting

### Email not sending?
- Check your server's PHP mail configuration
- Verify SMTP settings on your hosting
- Check server error logs for PHP mail errors
- Some shared hosting requires additional mail configuration

### Alternative: Use PHPMailer
For better email delivery, consider using PHPMailer with SMTP:
- More reliable than PHP's `mail()` function
- Works with Gmail, SendGrid, Mailgun, etc.
- Better spam score

## Security Notes

- Email validation is performed on both frontend and backend
- All inputs are sanitized using `htmlspecialchars()` and `filter_var()`
- Invalid emails are rejected before processing
- JSON responses prevent direct PHP output exposure

