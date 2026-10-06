

<?php
require_once 'conn.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-veloura sticky-top py-3">
    <div class="container">
        <a class="navbar-brand font-serif" href="index.php">Veloura Parfum</a>
        <a href="logout.php" class="btn btn-outline-burgundy btn-sm">Logout</a>
    </div>
</nav>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="font-serif">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
            <p class="text-muted">Manage your profile, orders, and wishlist fragrances.</p>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="bg-white p-4 border h-100">
                <h5 class="font-serif mb-3">Account Details</h5>
                <p class="mb-1"><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
                <p class="mb-3"><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                <a href="#" class="btn btn-outline-burgundy btn-sm w-100">Edit Profile</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="bg-white p-4 border h-100">
                <h5 class="font-serif mb-3">Recent Orders</h5>
                <p class="text-muted small">You have no recent fragrance orders yet.</p>
                <a href="products.php" class="btn btn-gold btn-sm mt-2">Explore Collections</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
