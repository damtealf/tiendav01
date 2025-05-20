<?php
require_once 'product-functions.php';
$products = getFeaturedProducts();
?>

<section class="mb-5">
    <h2 class="text-light mb-4"><i class="fas fa-star text-highlight me-2"></i>Produtos Destacados</h2>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php foreach ($products as $product): ?>
        <div class="col">
            <div class="card h-100 product-card">
                <?php if ($product['discount'] > 0): ?>
                <span class="offer-badge bg-highlight text-dark"><?= $product['discount'] ?>% OFF</span>
                <?php endif; ?>
                
                <img src="<?= getProductImage($product['id']) ?>" 
                     class="card-img-top product-img" 
                     alt="<?= htmlspecialchars($product['name']) ?>"
                     title="<?= htmlspecialchars($product['name']) ?>">
                
                <div class="card-body">
                    <h5 class="card-title text-light"><?= htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text text-muted small"><?= htmlspecialchars($product['description']) ?></p>
                    
                    <div class="rating mb-2">
                        <?= str_repeat('<i class="fas fa-star text-warning"></i>', floor($product['rating'])) ?>
                        <?= ($product['rating'] - floor($product['rating']) >= 0.5) ? '<i class="fas fa-star-half-alt text-warning"></i>' : '' ?>
                        <span class="small text-muted ms-1">(<?= $product['reviews_count'] ?>)</span>
                    </div>
                    
                    <p class="card-text">
                        <span class="text-accent fw-bold">$<?= number_format($product['price'] - ($product['price'] * ($product['discount'] / 100)), 2) ?></span>
                        <?php if ($product['discount'] > 0): ?>
                        <span class="text-decoration-line-through text-muted small ms-2">$<?= number_format($product['price'], 2) ?></span>
                        <?php endif; ?>
                    </p>
                    
                    <button class="btn btn-accent btn-sm add-to-cart" data-id="<?= $product['id'] ?>">
                        <i class="fas fa-cart-plus me-1"></i>Adicionar
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>