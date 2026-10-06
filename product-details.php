
<?php 
require_once 'conn.php'; 
$name = isset($_GET['name']) ? $_GET['name'] : 'Élan Rose';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-veloura sticky-top py-3">
    <div class="container">
        <a class="navbar-brand font-serif" href="index.php">Veloura Parfum</a>
        <div class="d-flex align-items-center gap-3">
            <a href="products.php" class="text-dark"><i class="fa-solid fa-arrow-left"></i> Back to Shop</a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-md-6">
            <div class="bg-white p-4 border border-light shadow-sm text-center">
                <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=800&q=80" alt="<?php echo $name; ?>" class="img-fluid" style="max-height: 500px; object-fit: cover;">
            </div>
        </div>
        <div class="col-md-6">
            <span class="text-uppercase text-muted tracking-widest small">Eau de Parfum</span>
            <h1 class="font-serif display-4 mt-1 mb-2"><?php echo htmlspecialchars($name); ?></h1>
            <div class="text-warning mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <span class="text-muted ms-2 small">(128 reviews)</span></div>
            <h3 class="font-serif text-burgundy fw-bold mb-4">₹2,499</h3>
            <p class="text-muted mb-4">An exquisite fragrance composed of rare botanical essences that evoke pure sophistication and unforgettable presence.</p>
            
            <div class="mb-4">
                <h6 class="font-serif mb-2">Fragrance Notes:</h6>
                <ul class="list-unstyled text-muted small">
                    <li><strong>Top Notes:</strong> Bergamot, Pink Peppercorn</li>
                    <li><strong>Heart Notes:</strong> Damask Rose, Jasmine Absolute</li>
                    <li><strong>Base Notes:</strong> Amber, White Musk, Vanilla</li>
                </ul>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <div class="input-group" style="width: 130px;">
                        <button class="btn btn-outline-secondary qty-minus" type="button">-</button>
                        <input type="text" class="form-control text-center bg-white" value="1" readonly>
                        <button class="btn btn-outline-secondary qty-plus" type="button">+</button>
                    </div>
                </div>
                <div class="col">
                    <a href="cart.php" class="btn btn-gold w-100 py-3">Add to Bag</a>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-burgundy py-3 px-3"><i class="fa-regular fa-heart"></i></button>
                </div>
            </div>
            <a href="cart.php" class="btn btn-dark w-100 rounded-0 py-3 text-uppercase tracking-widest">Buy Now</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
