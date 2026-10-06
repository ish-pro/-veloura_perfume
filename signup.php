<?php
require_once 'conn.php';
$error = '';
$success = '';

if (!$conn) {
    $error = "Database connection failed. Please start MySQL/XAMPP and make sure the 'veloura_parfum' database exists.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if email exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Email address is already registered.";
        } else {
            $stmt->close();
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $insert->bind_param("sss", $name, $email, $hashed_password);
            
            if ($insert->execute()) {
                $success = "Account created successfully! <a href='login.php'>Login here</a>.";
            } else {
                $error = "Something went wrong. Please try again.";
            }
            $insert->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="container-fluid auth-wrapper p-0">
    <div class="row g-0 h-100">
        <div class="col-lg-6 d-none d-lg-flex auth-left-bg flex-column justify-content-center p-5 text-center">
            <h1 class="font-serif display-4 mb-3">Veloura Parfum</h1>
            <p class="font-serif fst-italic lead">“Begin your fragrance journey with us.”</p>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
            <div class="w-100" style="max-width: 420px;">
                <h2 class="font-serif mb-1">Create Account</h2>
                <p class="text-muted small mb-4">Register for your personal Veloura profile.</p>

                <?php if(!empty($error)): ?>
                    <div class="alert alert-danger rounded-0 py-2 small"><?php echo $error; ?></div>
                <?php elseif (!$conn): ?>
                    <div class="alert alert-warning rounded-0 py-2 small">Database connection failed. Start MySQL/XAMPP and make sure the database <strong>veloura_parfum</strong> exists.</div>
                <?php endif; ?>
                <?php if(!empty($success)): ?>
                    <div class="alert alert-success rounded-0 py-2 small"><?php echo $success; ?></div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label small text-uppercase">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-uppercase">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-uppercase">Password (Min 8 characters)</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small text-uppercase">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-auth w-100 mb-3">Create Account</button>
                </form>
                <div class="text-center small">
                    <span class="text-muted">Already have an account?</span> <a href="login.php" class="text-dark fw-bold ms-1">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
