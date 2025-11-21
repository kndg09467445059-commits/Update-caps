<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'inventory');
define('DB_USER', 'root');
define('DB_PASS', '');

// Google OAuth Configuration
define('GOOGLE_CLIENT_ID', '331071626282-9vnptprgpjteva93n96ljnjhoe980j4b.apps.googleusercontent.com');

// Email Configuration (Gmail SMTP)
// To get Gmail App Password:
// 1. Go to https://myaccount.google.com/security
// 2. Enable 2-Step Verification
// 3. Go to App Passwords and generate one for this application
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com'); // Replace with your Gmail address
define('SMTP_PASSWORD', 'your-app-password-here'); // Replace with your Gmail App Password
define('SMTP_FROM_EMAIL', 'your-email@gmail.com'); // Replace with your Gmail address
define('SMTP_FROM_NAME', 'Techno Pest Control');
?>
