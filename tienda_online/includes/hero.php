<?php
$banners = getBannerImages();
?>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php foreach ($banners as $index => $banner): ?>
        <button type="button" data-bs-target="#mainCarousel" 
                data-bs-slide-to="<?= $index ?>" 
                <?= $index === 0 ? 'class="active"' : '' ?>></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($banners as $index => $banner): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <img src="<?= $banner ?>" class="d-block w-100" 
                 alt="Banner <?= $index + 1 ?>" 
                 title="Banner promocional <?= $index + 1 ?>">
        </div>
        <?php endforeach; ?>
    </div>
</div>