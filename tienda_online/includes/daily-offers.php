<?php
$dailyOffers = [
    ['name' => 'Reloj Inteligente', 'price' => 79.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Reloj'],
    ['name' => 'Tablet 10"', 'price' => 199.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Tablet'],
    ['name' => 'Cámara Digital', 'price' => 249.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Cámara'],
    ['name' => 'Altavoz Bluetooth', 'price' => 59.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Altavoz'],
    ['name' => 'Mouse Inalámbrico', 'price' => 19.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Mouse'],
    ['name' => 'Teclado Mecánico', 'price' => 49.99, 'image' => 'https://via.placeholder.com/150x150/FFFFFF/1E1E1E?text=Teclado'],
];
?>

<section class="mb-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-light"><i class="fas fa-bolt text-highlight me-2"></i>Ofertas del Día</h2>
        <a href="#" class="btn btn-sm btn-outline-accent">Ver todas</a>
    </div>
    
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-3">
        <?php foreach ($dailyOffers as $offer): ?>
        <div class="col">
            <div class="card h-100 border-0 bg-transparent">
                <img src="<?= $offer['image'] ?>" class="card-img-top rounded" alt="<?= $offer['name'] ?>">
                <div class="card-body p-2 text-center">
                    <p class="card-text small text-light mb-1"><?= $offer['name'] ?></p>
                    <p class="card-text text-accent fw-bold">$<?= number_format($offer['price'], 2) ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>