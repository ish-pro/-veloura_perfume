
<?php require_once 'config/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veloura Parfum — Luxury French Fragrances</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- TOP ANNOUNCEMENT BAR -->
<div class="announcement-bar text-center">
    COMPLIMENTARY SHIPPING ON ORDERS OVER ₹1999 | DISCOVER YOUR SIGNATURE SCENT
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-veloura sticky-top py-3">
    <div class="container">
        <a class="navbar-brand font-serif" href="index.php">Veloura Parfum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#velouraNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="velouraNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Collections</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Perfumes</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3">
            <a href="products.php" class="text-dark"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="<?php echo isset($_SESSION['user_id']) ? 'dashboard.php' : 'login.php'; ?>" class="text-dark"><i class="fa-regular fa-user"></i></a>
            <a href="cart.php" class="text-dark position-relative"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero-section text-center text-md-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <span class="text-uppercase tracking-widest text-light small d-mb-2">Crafted to Captivate</span>
                <h1 class="display-3 font-serif fw-normal mb-3">Scents that leave a legacy.</h1>
                <p class="lead mb-4 text-light opacity-85">Discover refined fragrances created for unforgettable moments.</p>
                <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                    <a href="products.php" class="btn btn-gold">Shop Collection</a>
                    <a href="products.php" class="btn btn-outline-light rounded-0 px-4">Explore Perfumes</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COLLECTION SECTION -->
<section class="py-5 my-4">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-serif display-5">Shop By Collection</h2>
            <div class="mx-auto mt-2" style="width: 50px; height: 2px; background-color: var(--gold);"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="collection-card">
                    <img src="https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?auto=format&fit=crop&w=600&q=80" alt="Floral Bouquet">
                    <div class="collection-overlay">
                        <h4 class="font-serif h5">Floral Bouquet</h4>
                        <p class="small opacity-75 mb-2">Soft, Romantic, Timeless.</p>
                        <a href="products.php" class="btn btn-sm btn-gold">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="collection-card">
                    <img src="https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=600&q=80" alt="Signature Rose">
                    <div class="collection-overlay">
                        <h4 class="font-serif h5">Signature Rose</h4>
                        <p class="small opacity-75 mb-2">Rich, Alluring, Audacious.</p>
                        <a href="products.php" class="btn btn-sm btn-gold">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="collection-card">
                    <img src="https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?auto=format&fit=crop&w=600&q=80" alt="Fresh & Radiant">
                    <div class="collection-overlay">
                        <h4 class="font-serif h5">Fresh & Radiant</h4>
                        <p class="small opacity-75 mb-2">Light, Crisp, Uplifting.</p>
                        <a href="products.php" class="btn btn-sm btn-gold">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="collection-card">
                    <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=600&q=80" alt="Exclusive Collection">
                    <div class="collection-overlay">
                        <h4 class="font-serif h5">Exclusive Collection</h4>
                        <p class="small opacity-75 mb-2">Rare, Unique, Unforgettable.</p>
                        <a href="products.php" class="btn btn-sm btn-gold">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED FRAGRANCES -->
<section class="py-5 bg-white border-top border-bottom border-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-serif display-5">Featured Fragrances</h2>
            <div class="mx-auto mt-2" style="width: 50px; height: 2px; background-color: var(--gold);"></div>
        </div>
        <div class="row g-4">
            <?php 
            $featured = [
                ["name" => "Élan Rose", "type" => "Eau de Parfum", "price" => "₹2,499", "img" => "https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=500&q=80"],
                ["name" => "Rouge Noir", "type" => "Extrait de Parfum", "price" => "₹2,999", "img" => "https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=500&q=80"],
                ["name" => "Lila Lumière", "type" => "Eau de Toilette", "price" => "₹2,799", "img" => "https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=500&q=80"],
                ["name" => "Jardin Secret", "type" => "Eau de Parfum", "price" => "₹2,599", "img" => "https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=500&q=80"],
                ["name" => "Velours de Nuit", "type" => "Parfum Intense", "price" => "₹3,499", "img" => "https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?auto=format&fit=crop&w=500&q=80"]
            ];
            foreach($featured as $p):
            ?>
            <div class="col-lg col-md-4 col-sm-6">
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
        <div class="text-center mt-5">
            <a href="products.php" class="text-uppercase text-dark fw-bold tracking-widest text-decoration-none border-bottom border-dark pb-1">View All Fragrances <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1615397349754-cfa2066a298e?auto=format&fit=crop&w=800&q=80" alt="About Veloura" class="img-fluid shadow">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="text-uppercase tracking-widest text-muted small">Our Story</span>
                <h2 class="font-serif display-5 my-3">The art of fine fragrance is our heritage.</h2>
                <p class="text-muted mb-4">All Veloura parfums are crafted as a work of art—meticulously crafted in France using the world's finest ingredients. We believe in timeless elegance, sustainable luxury, and the emotion that only a signature scent can awaken.</p>
                <a href="products.php" class="btn btn-outline-burgundy">Discover Our Story</a>
            </div>
        </div>
    </div>
</section>

<!-- PROMOTIONAL BANNER -->
<section class="promo-banner text-center">
    <div class="container">
        <h2 class="font-serif display-4 mb-2">20% OFF</h2>
        <p class="lead mb-4 font-serif">Because you deserve something exquisite. Discover your signature scent.</p>
        <a href="products.php" class="btn btn-gold">Shop The Sale</a>
    </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="font-serif display-5">Loved By Our Clients</h2>
            <div class="mx-auto mt-2" style="width: 50px; height: 2px; background-color: var(--gold);"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 border border-light bg-cream h-100 text-center">
                    <div class="text-warning mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="font-serif fst-italic mb-4">“Veloura Parfum is pure luxury. The scents are sophisticated, long-lasting, and absolutely mesmerizing.”</p>
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" class="rounded-circle mb-2" width="60" height="60" alt="Client">
                    <h6 class="font-serif mb-0">Emily R.</h6>
                    <small class="text-muted">Verified Buyer</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border border-light bg-cream h-100 text-center">
                    <div class="text-warning mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="font-serif fst-italic mb-4">“The attention to detail in every bottle is unmatched. It feels like wearing confidence and elegance.”</p>
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=100&q=80" class="rounded-circle mb-2" width="60" height="60" alt="Client">
                    <h6 class="font-serif mb-0">Sophia M.</h6>
                    <small class="text-muted">Verified Buyer</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border border-light bg-cream h-100 text-center">
                    <div class="text-warning mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="font-serif fst-italic mb-4">“I've found my signature scent. Veloura is now the only perfume brand I trust and adore.”</p>
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=100&q=80" class="rounded-circle mb-2" width="60" height="60" alt="Client">
                    <h6 class="font-serif mb-0">Lauren T.</h6>
                    <small class="text-muted">Verified Buyer</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="py-5" style="background-color: #3b0b13; color: white;">
    <div class="container py-4 text-center">
        <h3 class="font-serif mb-2">Stay inspired & be the first to know</h3>
        <p class="text-light opacity-75 mb-4">Subscribe for fragrance stories, exclusive launches and special offers.</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="input-group">
                    <input type="email" class="form-control rounded-0 border-0 p-3" placeholder="Enter your email address">
                    <button class="btn btn-gold px-4" type="submit">Sign Me Up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="contact">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-3">
                <h3 class="font-serif text-white mb-3">Veloura Parfum</h3>
                <p class="small text-muted mb-3">Timeless French fragrances crafted for the discerning connoisseur.</p>
                <div class="d-flex gap-3 fs-5 text-gold">
                    <a href="#" class="text-gold"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="text-gold"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="text-gold"><i class="fa-brands fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <h5>Shop</h5>
                <a href="products.php">Floral Bouquets</a>
                <a href="products.php">Warm & Sensual</a>
                <a href="products.php">Fresh & Radiant</a>
                <a href="products.php">Exclusive Collection</a>
            </div>
            <div class="col-lg-2 col-6">
                <h5>Customer Care</h5>
                <a href="#">Shipping & Delivery</a>
                <a href="#">Returns & Exchanges</a>
                <a href="#">FAQs</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col-lg-2 col-6">
                <h5>About</h5>
                <a href="#about">Our Story</a>
                <a href="#">Ingredients</a>
                <a href="#">Craftsmanship</a>
                <a href="#">Sustainability</a>
            </div>
            <div class="col-lg-3 col-6">
                <h5>Perks</h5>
                <p class="small text-muted"><i class="fa-solid fa-truck text-gold me-2"></i> Complimentary shipping on orders over ₹1999</p>
                <p class="small text-muted"><i class="fa-solid fa-gift text-gold me-2"></i> Sample every order</p>
                <p class="small text-muted"><i class="fa-solid fa-box text-gold me-2"></i> Luxury gift wrapping</p>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="row text-center text-md-start small text-muted py-3">
            <div class="col-md-6">&copy; 2026 Veloura Parfums. All rights reserved.</div>
            <div class="col-md-6 text-md-end"><a href="#" class="d-inline me-3">Privacy Policy</a><a href="#" class="d-inline">Terms of Service</a></div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>