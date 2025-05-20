<?php
$categories = [
    ['name' => '', 'icon' => 'fa-laptop'],
    ['name' => 'Hogar', 'icon' => 'fa-home'],
    ['name' => 'Moda', 'icon' => 'fa-tshirt'],
    ['name' => 'Deportes', 'icon' => 'fa-running'],
    ['name' => 'Juguetes', 'icon' => 'fa-gamepad'],
    ['name' => 'Libros', 'icon' => 'fa-book'],
];
?>

<section class="mb-5">
    <h2 class="text-light mb-4"><i class="fas fa-list text-highlight me-2"></i>Explora por Categoría</h2>
    
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-3">
        <?php foreach ($categories as $category): ?>
        <div class="col">
            <div class="category-card p-3 text-center">
                <i class="fas <?= $category['icon'] ?> fa-3x mb-3 text-accent category-icon"></i>
                <h6 class="text-light mb-0"><?= $category['name'] ?></h6>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>