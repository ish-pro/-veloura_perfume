
<?php require_once 'config/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="bg-white p-5 border shadow-sm w-100" style="max-width: 450px;">
        <h2 class="font-serif mb-2 text-center">Forgot Your Password?</h2>
        <p class="text-muted small text-center mb-4">Enter your email address and we'll help you reset your password.</p>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label small text-uppercase">Email Address</label>
                <input type="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-auth w-100 mb-3">Send Reset Link</button>
        </form>
        <div class="text-center small">
            <a href="login.php" class="text-dark">Back to Login</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>