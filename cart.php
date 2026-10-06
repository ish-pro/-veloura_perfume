<?php require_once 'config/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-veloura sticky-top py-3">
    <div class="container">
        <a class="navbar-brand font-serif" href="index.php">Veloura Parfum</a>
        <a href="products.php" class="text-dark text-decoration-none small">Continue Shopping</a>
    </div>
</nav>

<div class="container py-5">
    <h1 class="font-serif display-4 mb-4 text-center">Your Shopping Bag</h1>
    <div class="row g-5">
        <div class="col-lg-8">
            <div class="table-responsive bg-white p-4 border">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=100&q=80" width="60" alt="Élan Rose">
                                    <div>
                                        <h6 class="font-serif mb-0">Élan Rose</h6>
                                        <small class="text-muted">Eau de Parfum</small>
                                    </div>
                                </div>
                            </td>
                            <td>₹2,499</td>
                            <td>
                                <div class="input-group input-group-sm" style="width: 100px;">
                                    <button class="btn btn-outline-secondary qty-minus">-</button>
                                    <input type="text" class="form-control text-center bg-white" value="1" readonly>
                                    <button class="btn btn-outline-secondary qty-plus">+</button>
                                </div>
                            </td>
                            <td class="fw-bold">₹2,499</td>
                            <td><button class="btn text-danger btn-sm"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="bg-white p-4 border">
                <h4 class="font-serif mb-4">Order Summary</h4>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Subtotal</span>
                    <span>₹2,499</span>
                </div>
                <div class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                    <span class="text-muted">Shipping</span>
                    <span class="text-success">FREE</span>
                </div>
                <div class="d-flex justify-content-between mb-4 fw-bold fs-5">
                    <span>Total</span>
                    <span>₹2,499</span>
                </div>
                <button class="btn btn-gold w-100 py-3">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
