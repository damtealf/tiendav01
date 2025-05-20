<?php
require_once 'db-config.php';

function getFeaturedProducts($limit = 4) {
    $db = getDBConnection();
    
    // Corrección: Usar bindParam con tipo explícito
    $stmt = $db->prepare("SELECT * FROM products WHERE stock > 0 ORDER BY created_at DESC LIMIT :limit");
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getProductImage($productId) {
    $images = [
        1 => 'smartphone_anexado_300x300.jpg',
        2 => 'laptop_ultraadigada_300x300.jpg',
        3 => 'auriculares_habilatorios_300x300.jpg',
        4 => 'windows_center_300x300.jpg'
    ];
    return 'images/products/'.($images[$productId] ?? 'default_product.jpg');
}

function getBannerImages() {
    return [
        'images/banners/banner1_1600x500.jpg',
        'images/banners/banner2_1600x500.jpg',
        'images/banners/banner3_1600x500.jpg'
    ];
}
?>