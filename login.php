<?php
require_once 'config/conn.php';
$error = '';

if (!$conn) {
    $error = "Database connection failed. Please start MySQL/XAMPP and make sure the 'veloura_parfum' database exists.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $email;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No account found with this email.";
        }
        $stmt->close();
    } else {
        $error = "Please fill in all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container-fluid auth-wrapper p-0">
    <div class="row g-0 h-100">
        <div class="col-lg-6 d-none d-lg-flex auth-left-bg flex-column justify-content-center p-5 text-center">
            <h1 class="font-serif display-4 mb-3">Veloura Parfum</h1>
            <p class="font-serif fst-italic lead">“Every fragrance tells a story.”</p>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
            <div class="w-100" style="max-width: 420px;">
                <h2 class="font-serif mb-1">Welcome back</h2>
                <p class="text-muted small mb-4">Login to access your Veloura account.</p>

                <?php if(!empty($error)): ?>
                    <div class="alert alert-danger rounded-0 py-2 small"><?php echo $error; ?></div>
                <?php elseif (!$conn): ?>
                    <div class="alert alert-warning rounded-0 py-2 small">Database connection failed. Start MySQL/XAMPP and make sure the database <strong>veloura_parfum</strong> exists.</div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label small text-uppercase">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-uppercase">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4 small">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="forgot-password.php" class="text-dark">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-auth w-100 mb-3">Login</button>
                </form>
                <div class="text-center small">
                    <span class="text-muted">Don't have an account?</span> <a href="signup.php" class="text-dark fw-bold ms-1">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
