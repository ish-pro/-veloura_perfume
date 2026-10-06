
<?php require_once 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Perfumes — Veloura Parfum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-veloura sticky-top py-3">
    <div class="container">
        <a class="navbar-brand font-serif" href="index.php">Veloura Parfum</a>
        <div class="d-flex align-items-center gap-3">
            <a href="index.php" class="text-dark"><i class="fa-solid fa-house"></i></a>
            <a href="cart.php" class="text-dark"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="font-serif display-4">Our Perfumes</h1>
        <p class="text-muted">Explore our signature collection of luxury French fragrances.</p>
    </div>

    <!-- Filters & Search Toolbar -->
    <div class="row g-3 mb-5 align-items-center bg-white p-3 border">
        <div class="col-md-4">
            <input type="text" class="form-control rounded-0" placeholder="Search fragrances...">
        </div>
        <div class="col-md-3">
            <select class="form-select rounded-0">
                <option selected>Filter by Category</option>
                <option>Floral Bouquets</option>
                <option>Warm & Sensual</option>
                <option>Fresh & Radiant</option>
                <option>Exclusive</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select rounded-0">
                <option selected>Sort by: Featured</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Customer Top Rated</option>
            </select>
        </div>
        <div class="col-md-2 text-end">
            <button class="btn btn-gold w-100">Filter</button>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="row g-4">
        <?php 
        $all_products = [
            ["name" => "Élan Rose", "type" => "Eau de Parfum", "price" => "₹2,499", "img" => "https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=500&q=80"],
            ["name" => "Rouge Noir", "type" => "Extrait de Parfum", "price" => "₹2,999", "img" => "https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=500&q=80"],
            ["name" => "Lila Lumière", "type" => "Eau de Toilette", "price" => "₹2,799", "img" => "https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=500&q=80"],
            ["name" => "Jardin Secret", "type" => "Eau de Parfum", "price" => "₹2,599", "img" => "https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=500&q=80"],
            ["name" => "Velours de Nuit", "type" => "Parfum Intense", "price" => "₹3,499", "img" => "https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?auto=format&fit=crop&w=500&q=80"],
            ["name" => "Soleil d'Or", "type" => "Eau de Parfum", "price" => "₹2,899", "img" => "https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?auto=format&fit=crop&w=500&q=80"]
        ];
        foreach($all_products as $p):
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="product-card h-100 p-3 text-center d-flex flex-column">
                <button class="wishlist-icon"><i class="fa-regular fa-heart"></i></button>
                <div class="product-img-wrapper mb-3">
                    <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>">
                </div>
                <h5 class="font-serif mb-1"><a href="product-details.php?name=<?php echo urlencode($p['name']); ?>" class="text-dark text-decoration-none"><?php echo $p['name']; ?></a></h5>
                <p class="text-muted small mb-2"><?php echo $p['type']; ?></p>
                <div class="text-warning mb-2 small"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <p class="fw-bold mb-3"><?php echo $p['price']; ?></p>
                <a href="cart.php" class="btn btn-outline-burgundy mt-auto w-100">Add to Bag</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
